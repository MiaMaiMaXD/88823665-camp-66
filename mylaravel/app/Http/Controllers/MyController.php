<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private function myPrivate(){
        return 1;
    }
    public function myFunction(Request $request, $var1 = ""){
        $input = $request->input('myinput', '');
        $expression = !empty($var1) ? $var1 : $input;
        $data = [
            'myinput' => $input,
            'myvalue' => "",
            'multiplicationTable' => [],
        ];
        // ตรวจสอบและคำนวณสูตรคูณ
        if ($this->isValidExpression($expression, $num1, $num2)) {
            $data['myvalue'] = $num1 * $num2;

            // สร้างตารางสูตรคูณ
            for ($i = 1; $i <= 12; $i++) {
                $data['multiplicationTable'][] = "$num1 x $i = " . ($num1 * $i);
            }
        }
        return view('myview', $data);
    }
    // เมธอดตรวจสอบรูปแบบสูตรคูณ
    private function isValidExpression($expression, &$num1, &$num2){
        if (preg_match('/^(\d+)\*(\d+)$/', $expression, $matches)) {
            $num1 = (int)$matches[1];
            $num2 = (int)$matches[2];
            return true;
        }
        return false;
    }
}
