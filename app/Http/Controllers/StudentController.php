<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\student;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        $users = DB::table('students')
                // ->selectRaw('name,age,email,mobile')
                // ->selectRaw('count(*) as student_id,age')
                ->select(DB::raw('sum(age) as student_id'),'age')
                // ->orderByDesc('age')
                // ->orderByRaw('age DESC')
                ->groupByRaw('age')
                // ->orderByRaw('age')
                // ->whereRaw('name like ?',['g%'])
                ->get();
                // ->toSql();
        return $users;
        // $users = DB::select('select name,age,email,mobile as contact from students where age > ? and name like ?',[17,"E%"]);
        // $users = DB::insert("insert into students (stu_id,name,age,email,mobile) values(?,?,?,?,?)",[2,'Tahmidul',40,'sumonmti498@gmail.com','01787909190']);
        // $users = DB::update("update students set email='rafi@gmamil.com' where id=?",[11]);
        // $users = DB::delete('delete from students where id=?',[11]);
        // dd($users);
        // return $users;
    }
    public function InvestReturng(){
		$dateR=date("d", strtotime("+1 day"));
        $current_date=date("Y-m-d");
		// $dateRf=date("Y-m-d", strtotime("-7 days"));
		// $strayTr=date("Y-m-01", strtotime($dateRf));
		// $EndyTr=date("Y-m-t", strtotime($dateRf));
        $dateRE=date('d');
        return dd($dateR);
		// $datE=$mysqli->query("SELECT * FROM `upgrade` WHERE DATE(`date`)<='".$dateR."' AND `auto_id`='0'");
		// while($allInvest=mysqli_fetch_assoc($datE)){

		// 	$Rewty=mysqli_fetch_assoc($mysqli->query("SELECT SUM(curent_bal) AS totla FROM `game_return_test` WHERE `user`='".$allInvest['user']."' AND `play_id`='".$allInvest['serial']."' AND `month_add`='0' AND DATE(count_date) BETWEEN '".$strayTr."' AND '".$EndyTr."'"));
		// 	$thiskMonthret=$Rewty['totla'];

		// 	$retMOnth=date("m", strtotime($dateRf));
		// 	$Rewty21=mysqli_num_rows($mysqli->query("SELECT `serial` FROM `daily_return_per` WHERE `return_month`='".$retMOnth."' "));
		// 	$Rewty2=mysqli_fetch_assoc($mysqli->query("SELECT SUM(return_percent) AS totlarE FROM `daily_return_per` WHERE `return_month`='".$retMOnth."'"));
		// 	$thisMonth=$Rewty2['totlarE']/$Rewty21;
		// 	//echo $allInvest['serial'] ." >> $totalInvest >> $returnMonth >> $thisMonth >> $dayMonth >> $returnDay >> $gapDates >> $thiskMonthret<br/>";
		// }
	}
    // public function updateUser(){
    //     $users = DB::table('students')
    //         ->insertGetId(
    //             [
    //             'stu_id'=>431,
    //             'name'=>'Samiul Islam Rafi',
    //             'age'=>10,
    //             'email'=>'rafiraian2bb@gmail.com',
    //             'mobile'=>'01751400362',
    //             'city'=>'Rangpur',
    //             'created_at'=>now(),
    //             'updated_at'=>now()
    //             ]
                //['email'],
                //['mobile']
        // );
        // return $users;

            // if($users){
            //     echo "Data Insert Successfolly";
            // }else{
            //     echo "Data not added";
            // }
    //}
    //public function showUser(){
        // $user = DB::table('students')
        //         ->join('cities',function(JoinClause $join){
        //             $join->on('students.stu_id','=','cities.cid')
        //                     ->where('students.name','like','g%');
        //         })
                // ->select('students.*','cities.city')
                // ->select(DB::raw('count(*) as student_id'),'city')
                // ->select('students.*','cities.city')
                    // ->select(DB::raw('count(*) as Student_count'),'age')
                    // ->select(DB::raw('count(*) as Student_count'),'City')
                    // ->groupBy('city')
                    // ->having('Student_count','=',1)
                    // ->where('city','=','Wunschport')
                    // ->orderBy('student_count')
                    // ->get();
                // ->count();
                // ->where('cities.city','=','Evamouth')
                // ->where('students.name','like','g%')
                // ->orderBy('name')
                // ->groupBy('city')
                // ->where('students.email','=','bauch.thalia@douglas.org')
                // ->where('city','=','Wunschport')
                // ->having('student_id','>','city')
                // ->orderBy('mobile','DESC')
                // ->get();
    // return $user;
    // return view('joinuser',compact('user'));
    //}






    // public function showStudent(){
    //     $user = student::with('getCity')->get();
    //         // return $user;
    //         return view('joinuser',compact('user'));


        //$users = DB::table('students')
        // ->sum('age');
        // ->count('age');
        // ->max('age');
        // ->min('age');
        // ->average('age');
        //->avg('age');
        // ->latest()
        // ->oldest()
        // ->inRandomOrder()
        // ->limit(3)
        // ->take(3)
        // ->offset(1)
        // ->skip(2)
        // ->first();
        // ->orderBy('name')
        // ->orderBy('name','desc')
        // ->whereDate('created_at','2023-06-19')
        // ->whereMonth('created_at',6)
        // ->whereDay('created_at',9)
        // ->where([
        //     ['id','=',1],
        //     ['age','>',19]
        // ])
        // ->whereNotBetween('id',[3,6])
        // ->whereBetween('age',[18,20])
        //->where('name','like','S%')
        // ->where('name','Selena Abshire')
        // ->where('id',5)
        // ->select('name')
        // ->where('age','>=',19)
        // ->orWhere('city','=','Mayertview')
        // ->orWhere('email','like','C%')
        // ->get();
        //return $users;
    //}
}
