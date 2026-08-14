<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Admin\ProjetController;
use App\Http\Controllers\Admin\CompetenceController;
use App\Http\Controllers\AvisController;

// --- PAGES PUBLIQUES ---
Route::get('/', function () {
    return view('index');
});

// Route pour le formulaire de contact
Route::post('/contact', function (Request $request) {
    $data = $request->validate([
        'nom' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ]);

    // Envoi de l'email à ton adresse personnelle (sauvegarde)
    try {
        Mail::raw("Nouveau message reçu depuis le Portfolio :\n\n" .
                  "Nom : " . $data['nom'] . "\n" .
                  "Email : " . $data['email'] . "\n\n" .
                  "Message :\n" . $data['message'], function ($message) use ($data) {
            $message->to('koffimokpokposodehoundji@gmail.com')
                    ->subject('Contact Portfolio : ' . $data['nom']);
        });
    } catch (\Exception $e) {
        // On ignore si le mailer n'est pas encore configuré en local
    }

    // Construction du texte pré-rempli pour WhatsApp
    $texte = "Bonjour Koffi, je m'appelle *{$data['nom']}* ({$data['email']}).\n\n" .
             "Voici mon message :\n" .
             "_{$data['message']}_";

    $whatsappUrl = "https://wa.me/22870782133?text=" . urlencode($texte);

    // Redirection automatique de l'utilisateur vers WhatsApp
    return redirect()->away($whatsappUrl);
})->name('contact.send');

// Route pour les avis
Route::post('/avis/store', [AvisController::class, 'store'])->name('avis.store');


// --- ADMINISTRATION ---
Route::prefix('admin')->name('admin.')->group(function () {

    // Gestion des Projets (Lien : /admin/espoir)
    Route::get('/espoir', [ProjetController::class, 'index'])->name('index');
    Route::post('/projets/store', [App\Http\Controllers\Admin\ProjetController::class, 'store'])->name('projets.store');
    Route::delete('/projets/{id}', [App\Http\Controllers\Admin\ProjetController::class, 'destroy'])->name('projets.destroy');
    // Gestion des Compétences (Lien : /admin/competences)
    Route::get('/competences', [CompetenceController::class, 'index'])->name('competences.index');
    Route::post('/competences/store', [CompetenceController::class, 'store'])->name('competences.store');
    Route::delete('/competences/{id}', [CompetenceController::class, 'destroy'])->name('competences.destroy');
});
Route::get('/', function () {
    // On récupère toutes les compétences enregistrées
    $competences = \App\Models\Competence::all();
    $projets =\App\Models\Projet::all();
    return view('index', compact('competences', 'projets'));
});

?>
