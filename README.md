Laravel Homepage

// Web.php router
Route::get('/home-page', [App\Http\Controllers\AdminController::class, 'homepage'])->name('home');

// Controller
public function homepage()
    {
        return view('home.homepage');
    }
