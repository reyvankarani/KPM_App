<?php
    class Converter_model extends CI_Model{
        public function bulanConverter($periode){
            $no=1;
            $bulan = array(
                '01' => 'Januari',
                '02' => 'Februari',
                '03' => 'Maret',
                '04' => 'April',
                '05' => 'Mei',
                '06' => 'Juni',
                '07' => 'Juli',
                '08' => 'Agustus',
                '09' => 'September',
                '10' => 'Oktober',
                '11' => 'November',
                '12' => 'Desember');
            $hasil = $bulan[date('m',strtotime($periode))].' '.date('Y',strtotime($periode));
            return $hasil;
        }

		public function value($r){
            if ($r == 'I')
                return 1;
            if ($r == 'V')
                return 5;
            if ($r == 'X')
                return 10;
            if ($r == 'L')
                return 50;
            if ($r == 'C')
                return 100;
            if ($r == 'D')
                return 500;
            if ($r == 'M')
                return 1000;

            return -1;
        }

        public function romanToDecimal($str){
            // Initialize result
            $res = 0;

            // Traverse given input
            for ($i = 0; $i < strlen($str); $i++)
            {
                // Getting value of
                // symbol s[i]
                $s1 = $this->value($str[$i]);

                if ($i+1 < strlen($str)){
                    // Getting value of
                    // symbol s[i+1]
                    $s2 = $this->value($str[$i + 1]);
                    // Comparing both values
                    if ($s1 >= $s2)
                    {
                        // Value of current symbol 
                        // is greater or equal to 
                        // the next symbol
                        $res = $res + $s1;
                    }else
                    {
                        $res = $res + $s2 - $s1;
                        $i++; // Value of current symbol is
                        // less than the next symbol
                    }
                }else
                {
                    $res = $res + $s1;
                    $i++;
                }
            }
            return $res;
        }
    }