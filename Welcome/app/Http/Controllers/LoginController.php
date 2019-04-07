<?php

namespace App\Http\Controllers;
require_once __DIR__ . '/../../include.php';

use Illuminate\Http\Request;

use App\Models\Students as Student;
use App\Models\Admin as Admin;
/**
 * 此为登录控制器，登录分为三种情况：
 * 新生
 * 老生
 * 管理员
 */
class LoginController extends Controller
{
    /* 登录总控 */
    public function login(Request $request)
    {
        // 获取通过验证的数据...
        // $validated = $request->validated(); 
        $loginType = $request->input('loginType', "default");
        if ($loginType === "new") {
            $stu_eid = $request->input("examId", "default");
            $stu_cid = $request->input("perId", "default");
            // $this->idValidator = new IdValidator();
            $res_obj_array = Student::where([
                ["stu_cid",$stu_cid],
                ["stu_eid",$stu_eid],
            ])->whereIn("stu_status",["PREPARE","ENROLL"])->first();
            /* 判断该名新生是否存在 */
            if ($res_obj_array) {
                // 先清空，避免错误
                $request->session()->flush();
                session([
                    "id" => $res_obj_array->id,
                    "stu_status" => $res_obj_array->stu_status,
                    "stu_num" => $res_obj_array->stu_num,
                    "stu_name" => $res_obj_array->stu_name,
                    "stu_gen" => $res_obj_array->stu_gen,
                    "stu_cid" => $res_obj_array->stu_cid,
                    "stu_eid" => $res_obj_array->stu_eid,
                    "class_id" => $res_obj_array->class_id,
                    "stu_dorm_str" => $res_obj_array->stu_dorm_str,
                    "stu_from_school" => $res_obj_array->stu_from_school,
                    "Auth" => "new",
                ]);

                // $request->session()->put("usr", $request->input("stu_cid"));
                return redirect()->intended("/stu");
            }
        } else if ($loginType === "old") { // 老生部分
            $name = $request->input("name", "default");
            $perId = $request->input("perId", "default");
            $res_obj_array = Student::where([
                ["stu_name",$name],
                ["perId",$perId],
                ["stu_status","CURRENT"]
            ])->first();
            if ($res_obj_array) {
                // 先清空，避免错误
                $request->session()->flush();
                session([
                    "id" => $res_obj_array->id,
                    "stu_name" => $name,
                    "stu_gen" => $res_obj_array->stu_gen,
                    "stu_cid" => $perId,
                    "stu_eid" => $res_obj_array->stu_eid,
                    "class_id" => $res_obj_array->class_id,
                    "stu_dorm_str" => $res_obj_array->stu_dorm_str,
                    "stu_from_school" => $res_obj_array->stu_from_school,
                    "Auth" => "old",
                ]);
                return redirect()->intended("/senior");
            }
        } else if ($loginType === "admin") { // 管理员部分
            $userId = $request->input("userId", "default");
            $psw = $request->input("psw", "default");
            $res_obj_array = Admin::where([
                ["adm_name",$userId],
                ["adm_password",$psw],
            ])->first();
            if ($res_obj_array) {
                // 先清空，避免错误
                $request->session()->flush();
                session([
                    "id" => $res_obj_array->id,
                    "name" => $userId,
                    "Auth" => "admin",
                ]);
                return redirect()->intended("/admin");
            }
        }
        return redirect("/");
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect("/");
    }
}
