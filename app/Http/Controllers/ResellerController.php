<?php

namespace App\Http\Controllers;

use App\Models\TransationHistory;
use App\Models\Credit;
use App\Models\Zone;
use Illuminate\Http\Request;
use Session;
use Auth;

require_once 'converttostring.php';

class ResellerController extends Controller
{
    public function reseller()
    {
        $credits = Credit::where('user_id', Auth::user()->id)->get();
        return view('blade.reseller.reseller', compact('credits'));
    }
    public function reseller_store(Request $request)
    {

        // dd($request->all());
        $login_userid = Auth::user()->id;
        $p_coin_13 = 80;
        $coin_balance = 100;
        $client_zoneid = [];
        $client_zoneid_associate_name = [];
        // $data = $this->convert_string_to_data($request->code);
        $data = $this->convert_string_to_data2($request->code);

        // $data2 = $converter->convert_string_to_data2($request->code);

        foreach ($data as $key => $pval) {

            $prduct_name = $pval[2];
            $product_id = Zone::where('product_name', $prduct_name)->first();
            // dd($product_id);

            if (is_null($product_id)) {
                Session::put('productid_error', "product name does not exit ");
                $response[$key][0] = (object)['message' => 'product name does not exit '];
                $response[$key][1] = $pval[0];
                $response[$key][2] = $pval[1];
                // $response[$key][3] = $pid;  //product id
                Session::flash('message', 'Insufficient balance ');
                $this->session_message($response);
                return view('blade.reseller.reseller');
            }
            $client_zoneid[$key] = $product_id->product_id;
            $client_zoneid_associate_name[$prduct_name] = $product_id->product_id;
        }

        $response = [];
        $responses = [];
        $coin_order = 0;
        foreach ($data as $key => $datas) {
            //*************************balance check start here */

            $pid = $client_zoneid[$key];
            // dd($pid);
            //below if condition statement will be replace with db data (we are goin to have the db with different coin for different zone)
            // if ($pid = 13) $p_coin = 80;
            // else if ($pid = 23) $p_coin = 160;
            // $coin_order = $pid;  //very important no plus sign here
            //get user id from user table . user auth->userid and get user id

            //here will be the process or function to check the coin amount
            //from the product id from database
            // $p_coin = 80;
            // $coin_order+= $p_coin; //hard code to be replace from db data
            //here will be checked and compare from user main coin  balance
            //if less then $p_coin_pid fial and retrun with messaage insuffician coin

            // compare $coin_order wtih coin balace from credit table
            // if $coin_order is less than coinbalance call the orderForm fucntion else break the loop and return message insufficient balace

            if (is_null($coin_balance)) {
                $response[$key][0] = (object)['message' => 'Insufficient balance from sse bonchone'];
                $response[$key][1] = $datas[0];
                $response[$key][2] = $datas[1];

                $response[$key][3] = $pid;
                break;
            } else {
                $coin_balance = Credit::where('user_id', $login_userid)->first(); //get coin balance from login user account
                $get_zoneid = $this->getrole($datas[0], $datas[1], $pid);
                //dd($get_zoneid);
                $aa = array($get_zoneid[0]);
                $bb = $aa[0];
                $cc = (array)$bb;
                echo gettype($cc);
                //dd(count($cc)); //get zone id of reload uid
                $zone = Zone::where('product_id', $pid)->first();
                //  dd($zone);

                // dd($zone->indo);
                $arr_count = count($cc);
                if ($arr_count <= 2) {

                    $response[$key][0] = (object)['message' => 'This product has reached the purchase limit, please try purchasing another product！']; //this should be deffer base on smile.one server response
                    $response[$key][1] = $datas[0];  //user id
                    $response[$key][2] = $datas[1];  //zone id
                    $response[$key][3] = $pid;  //product id
                    $this->session_message($response);
                    return view('blade.reseller.reseller');
                } else {
                    if (!empty($zone)) {
                        if ($get_zoneid[0]->zone < 1) $coin_cost = $zone->brazil;
                        else {
                            if ($get_zoneid[0]->change_price > 1.25) $coin_cost = $zone->indo;
                            else $coin_cost = $zone->global;
                        }
                    } else {
                        Session::put('zoneid_error', "product id at zone does not exit");

                        return view('blade.reseller.reseller');
                    }
                }

                if ($coin_balance->coin_balance >= $coin_cost) {
                    //GET zone number and get prize base on zone e.g ingo=1,brazil=2,golobal=3
                    //  $get_zoneid=$this->getrole($datas[0], $datas[1], $datas[2]);  //old before zone table exit

                    echo $coin_balance->coin_balance;
                    $balance = $coin_balance->coin_balance;
                    $newBalance = $balance - $coin_cost;
                    //  $server_response= $this->orderForm($datas[0], $datas[1], $datas[2]);    //old before zone table exit
                    //  $server_response = $this->orderForm($datas[0], $datas[1], $pid);
                    /****** must below line unfreeze */
                    // $cmp = strcmp("Insufficient balance", $response[0]->message);
                    // //dd($cmp);
                    // if ($cmp != 0) {
                    //     $bb = Credit::find($coin_balance->id);
                    //     $bb->coin_balance = $newBalance;
                    //     $bb->save();
                    // }
                    //dd($server_response[0]->message);
                    $bb = Credit::find($coin_balance->id);
                    $bb->coin_balance = $newBalance;
                    $bb->save();
                    //  $response[$key][0] = $server_response[0]->message;
                    $response[$key][0] = (object)['message' => 'Success from sse']; //this should be deffer base on smile.one server response
                    $response[$key][1] = $datas[0];  //user id
                    $response[$key][2] = $datas[1];  //zone id
                    $response[$key][3] = $pid;  //product id
                } else {

                    $response[$key][0] = (object)['message' => 'Insufficient balance from sse'];
                    $response[$key][1] = $datas[0];
                    $response[$key][2] = $datas[1];
                    $response[$key][3] = $pid;  //product id
                    Session::flash('message', 'Insufficient balance ');
                    break;
                }
            }

            $message = $response[$key][0]->message;
            // $message = $server_response[0]->message;
            $uid = isset($response[$key][1]) ? $response[$key][1] : null;
            $zid = isset($response[$key][2]) ? $response[$key][2] : null;
            $pidd = isset($response[$key][3]) ? $response[$key][3] : null;

            TransationHistory::create([
                'message' => $message,
                'uid' => $uid,
                'zid' => $zid,
                'pid' => $pidd,
                'coin_amount' => $coin_order,
                'coin_balance' => $newBalance,
            ]);
        }

        echo (gettype($response));
        // dd($response);
        $this->session_message($response);

        return view('blade.reseller.reseller', compact('responses'));
    }
    public function convert_string_to_data2($e)
    {
        $arr = explode('/', $e);
        $final_data = [];
        $cot = 0;

        foreach ($arr as $key => $c) {
            $uid = strtok($c, '(');
            $aa = strtok($c, ')');
            $dd = strpos($aa, "(");
            $zid = substr($aa, $dd + 1, 7);

            if (strpos($c, "*") !== false) {
                $z = strtok($c, '*');
                $x = strpos($z, ")");
                $pid = substr($z, ($x + 1), 5);
                $y = strpos($c, "*");
                $ptime = substr($c, ($y + 1), 5);

                $string = $uid . "," . $zid . "," . $pid;
                $newdata = [];

                for ($i = 0; $i < $ptime; $i++) {
                    $newdata[$i] = $string;
                }

                foreach ($newdata as $key => $vv) {
                    $tt = explode(',', $vv);
                    $final_data[($cot)] = array($tt[0], $tt[1], $tt[2]);
                    $cot++;
                }
            } else {
                $xx = strpos($c, ")");
                $pid = substr($c, ($xx + 1), 5);
                $final_data[$cot] = array($uid, $zid, $pid);
            }
            $cot++;
        }

        return $final_data;
    }
    public function convert_string_to_data($e)
    {
        // $arr = explode('/', $e);
        $arr = explode(',', $e);

        $data1 = array();
        $uid = 0;
        $zid = 0;
        $pid = 0;
        foreach ($arr as $key => $value) {
            $uid = strtok($value, '(');

            $aa = strtok($value, ')');
            $dd = strpos($aa, "(");
            $zid = substr($aa, $dd + 1, 7);

            $x = strpos($value, ")");
            $pid = substr($value, ($x + 1), 5);

            $data1[$key] = array($uid, $zid, $pid);
        }
        return $data1;
    }

    public function orderForm($uid, $zid, $pid)
    {

        $userid = $uid;
        $zoneid = $zid;
        $email = "billionmore97@gmail.com";
        $product = "mobilelegends";
        $productid = $pid;
        $uid = "1972364";
        $time = time();

        $sign_arr = [
            'email' => $email,
            'uid' => $uid,
            'userid' => $userid,
            'zoneid' => $zoneid,
            'product' => $product,
            'productid' => $productid,
            'time' => $time,
        ];

        $m_key = "b69f5758549ec089966e726a21c8c1d7";

        $sign_arr['sign'] = $this->sign($sign_arr, $m_key);

        $url = 'https://www.smile.one/smilecoin/api/createorder';

        $res = $this->curlPost($url, $sign_arr);
        $res = json_decode($res);
        $data_return[0] = $res;
        $data_return[1] = $uid;
        $data_return[2] = $zid;
        $data_return[3] = $pid;

        return $data_return;
    }

    public function getrole($uid, $zid, $pid)
    {

        $userid = $uid;
        $zoneid = $zid;
        $email = "billionmore97@gmail.com";
        $product = "mobilelegends";
        $productid = $pid;
        $uid = "1972364";
        $time = time();

        $sign_arr = [
            'email' => $email,
            'uid' => $uid,
            'userid' => $userid,
            'zoneid' => $zoneid,
            'product' => $product,
            'productid' => $productid,
            'time' => $time,
        ];

        $m_key = "b69f5758549ec089966e726a21c8c1d7";

        $sign_arr['sign'] = $this->sign($sign_arr, $m_key);

        $url = 'https://www.smile.one/smilecoin/api/getrole';

        $res = $this->curlPost($url, $sign_arr);
        $res = json_decode($res);
        $data_return[0] = $res;
        $data_return[1] = $uid;
        $data_return[2] = $zid;
        $data_return[3] = $pid;

        return $data_return;
    }

    private function sign($sign_arr = [], $m_key)
    {
        ksort($sign_arr);

        $str = '';

        foreach ($sign_arr as $k => $v) {
            $str .= $k . '=' . $v . '&';
        }

        $str = $str . $m_key;

        return md5(md5($str));
    }

    private function curlPost($url, $params, $header = [])
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_POST, 1);

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_TIMEOUT, 5);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

        if ($header) {

            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        }

        curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.2; Win64; x64) Presto/2.12.388 Version/12.15');

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($ch);

        curl_close($ch);

        return $result;
    }

    public function resellerHistory($id)
    {
        $transactions = TransationHistory::where('user_id', $id)->get();
        return view('blade.reseller.resellerHistory', compact('transactions'));
    }

    public function session_message($response)
    {
        foreach ($response as $key => $val) {

            $response[$key][0] = $val[0]->message;
            // $response[$key][0] = $val[0]->message;
        }
        foreach ($response as $key => $val) {
            $response[$key] = implode(' ', $val);
        }
        $arr_res = $response;
        $sec = implode(',', $arr_res);

        if (Session::has('val')) {
            $old_val = Session::get('val');
            $sec = $sec . "," . $old_val;
            Session::put('val', $sec);
        } else  Session::put('val', $sec);
    }
}
