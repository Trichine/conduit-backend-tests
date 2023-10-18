use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

    class DatabaseSeeder extends Seeder
    {
        $roseId = DB::table('users')->insertGetId([
        'name' => 'Rose',
        'email' => 'rose@mail.com',
        'password' => Hash::make('pwd'),
        'bio' => 'Je voudrais devenir enseignante pour enfants',
        'created_at' => Carbon::now(),
    ]);

    // 2. Ajouter l'utilisatrice Musonda
        $musondaId = DB::table('users')->insertGetId([
        'name' => 'Musonda',
        'email' => 'musonda@mail.com',
        'password' => Hash::make('pwd2'),
        'bio' => 'Je songe à devenir infirmière, j’écris mes réflexions',
        'created_at' => Carbon::now(),
    ]);


}
