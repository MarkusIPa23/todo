<?
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToDoSeeder extends Seeder
{
    public function run()
    {
        DB::table('to_dos')->insert([
            ['content' => 'Nopirkt pienu', 'completed' => false, 'priority' => 'high'],
            ['content' => 'Iemācīties Laravel', 'completed' => false, 'priority' => 'high'],
            ['content' => 'Komunicēt ar cilvēkiem', 'completed' => false, 'priority' => 'low'],
        ]);
    }
}
