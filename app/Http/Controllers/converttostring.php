<?php

class result
{
    public function convert_string_to_data2($e)
    {
        $arr = explode('/', $e);
        $final_data = [];
        $cot = 0;

        foreach ($arr as $key => $c) {
            $uid = strtok($c, '(');
            $aa = strtok(')');
            $dd = strpos($aa, "(");
            $zid = substr($aa, $dd + 1, 7);

            if (strpos($c, "*") !== false) {
                $z = strtok('*');
                $x = strpos($z, ")");
                $pid = substr($z, $x + 1, 5);
                $y = strpos($c, "*");
                $ptime = substr($c, $y + 1, 5);

                $string = $uid . "," . $zid . "," . $pid;
                $newdata = [];

                for ($i = 0; $i < $ptime; $i++) {
                    $newdata[] = explode(',', $string);
                }

                foreach ($newdata as $key => $vv) {
                    $final_data[$cot] = $vv;
                    $cot++;
                }
            } else {
                $xx = strpos($c, ")");
                $pid = substr($c, $xx + 1, 5);
                $final_data[$cot] = array($uid, $zid, $pid);
            }
            $cot++;
        }

        return $final_data;
    }

    public function convert_string_to_data($e)
    {
        $arr = explode(',', $e);

        $data1 = [];
        $uid = 0;
        $zid = 0;
        $pid = 0;

        foreach ($arr as $key => $value) {
            $uid = strtok($value, '(');
            $aa = strtok(')');
            $dd = strpos($aa, "(");
            $zid = substr($aa, $dd + 1, 7);

            $x = strpos($value, ")");
            $pid = substr($value, $x + 1, 5);

            $data1[$key] = array($uid, $zid, $pid);
        }

        return $data1;
    }
}
