<?php

use Illuminate\Database\Seeder;
use App\Model\Time;
use App\Model\TimeDay;
use App\Model\User;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::transaction(function() {
       		//Admin
       		$user = new User;
	        $user->name = "Paulo Filho";
	        $user->email = "paulo.ecomp@gmail.com";
	        $user->registration = "11211177";
	        $password = "123456";
	        $user->password = bcrypt($password);
	        $user->level = 'admin';
	        $user->save();

	        //Funcionário
	        $user = new User;
	        $user->name = "Lucas Assys";
	        $user->registration = "11211178";
	        $user->level = 'employee';
	        $user->save();

	        //Ponto do dia
	        $time_day = new TimeDay;
            $time_day->user_id = $user->id;
            $time_day->date = Carbon::now()->toDayDateTimeString();
            $time_day->save();

            //Abertura e fechamento do ponto Diário
            $time = new Time;
            $time->time_days_id = $time_day->id;
            $time->time_start = "8:00:00";
            $time->time_end = "18:00:00";
            $time->type_time = 'job';
            $time->status = true;
            $time->save();

            //Abertura e fechamento do ponto Almoço
            $time = new Time;
            $time->time_days_id = $time_day->id;
            $time->time_start = "12:00:00";
            $time->time_end = "14:00:00";
            $time->type_time = 'lunch';
            $time->status = true;
            $time->save();
       });
    }
}
