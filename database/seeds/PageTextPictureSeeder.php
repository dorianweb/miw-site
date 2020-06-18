<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageTextPictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = ['Accueil', 'Presentation', 'Contact', 'Actualite'];
        $subpages = [
            'Accueil' => ['accueil'],
            'Presentation' => ['presentation', 'programme', 'débouché', 'candidater', 'livret-or'],
            'Contact' => ['contact'],
            'Actualite' => ['actualite']
        ];
        foreach ($pages as $page) {
            $dbpage = DB::table('pages')->insertGetId([
                'name' => $page,
            ]);
            foreach ($subpages[$page] as $subpage) {
                $dbsubpage = DB::table('subpages')->insertGetId([
                    'name' => $subpage,
                    'page_id' => $dbpage
                ]);

            }
        }
        $content_pages = [
            'accueil' => [
                'texts' => [
                    ['text' => 'Licence professionnelle : Métiers de l\'informatique et applications web.', 'index' => 1],
                    ['text' => 'Parcours :<strong>M</strong>obilité – <strong>I</strong>nternet & <strong>W</strong>eb', 'index' => 2],
                    ['text' => 'La licence professionnelle MIW  forme des spécialistes dans les secteurs très demandeurs et porteurs du DÉVELOPPEMENT WEB, D\'APPLICATION MOBILES et D\'OBJETS CONNECTES.Elle est proposée par <strong>l\'IUT d\'Aix-Marseille</strong> et se déroule au pôle universitaire de <strong>GAP</strong>', 'index' => 3],
                    ['text' => 'Les <strong>DEVELOPPEURS WEB </strong>devront maîtriser de nombreux langages de programmation comme le <strong>HTML, le CSS3,  le PHP, le JavaScript etc..</strong> mais aussi avoir des connaissances concernant <strong>les CMS, frameworks et bibliothèques</strong>. Des compétences en <strong>bases de données, réseau, e-commerce, droit, webdesign, référencement</strong> seront nécessaires.', 'index' => 4],
                ],
                'pictures' => [
                    ['filename' => 'accueil.png', 'public_folder' => 'Accueil', 'index' => 0],
                ],
            ],
            'screen2' => [
                'texts' => [
                    ['text' => ' Un secteur qui recrute !', 'index' => 1],
                    ['text' => 'Beaucoup d\'entreprises font appel aujourd\'hui aux technologies nouvelles comme moyens d\'interactions internes ou externes : commerce électronique, télétravail, vidéoconférence, télécommunication  d\'informations et de documents électroniques, gestion de projets multi-localisés etc...', 'index' => 2],
                    ['text' => 'Désormais, dans les entreprises, les hommes et les machines coopèrent en permanence au travers de nouveaux outils tels Internet, Intranet, Réseaux d\'entreprise, Système d\'informations Distribuées et  Multimédia. Ces outils nécessitent une évolution des modes de pensée et des métiers. Ces nouveaux métiers imposent une grande ouverture d\'esprit, une polyvalence, des connaissances techniques et humaines.', 'index' => 3],
                    ['text' => 'Les Débouché', 'index' => 4],
                ],
                'pictures' => [
                    ['filename' => 'iMac2.png', 'public_folder' => 'Accueil', 'index' => 1],
                ],
            ],
            'screen3' => [
                'texts' => [
                    ['text' => 'Pourquoi choisir cette formation ?', 'index' => 1],
                    ['text' => 'Cette Licence professionnelle forme des spécialistes dans les secteurs très demandeurs et porteurs du développement web, d\'applications mobiles et d\'objets connectés.  90 % des étudiants trouvent un travail dès la fin de leurs études. Une poursuite en Master est tout de même possible grâce à plusieurs partenariats.', 'index' => 2],
                    ['text' => 'Le Programme', 'index' => 3],
                    ['text' => 'Les Compétences', 'index' => 4],
                    ['text' => 'Devenir Étudiant', 'index' => 5],
                ],
                'pictures' => [
                    ['filename' => 'miw_2019.png', 'public_folder' => 'Accueil', 'index' => 1],
                ],
            ],
            'screen4' => [
                'texts' => [
                    ['text' => 'Travail de groupe', 'index' => 1],
                    ['text' => 'Des enseignants issus du monde professionnel', 'index' => 3],
                    ['text' => ' Les dernière technologie', 'index' => 3],
                ],
                'pictures' => [
                    ['filename' => 'stuff.png', 'public_folder' => 'Accueil', 'index' => 1],
                    ['filename' => 'cours-design.png', 'public_folder' => 'Accueil', 'index' => 1],
                    ['filename' => 'femme-ordi.png', 'public_folder' => 'Accueil', 'index' => 1],
                ],
            ],
            'screen5' => [
                'texts' => [
                    ['text' => 'prochaine date :', 'index' => 1],
                ],
                'pictures' => [
                    ['filename' => 'mountain.png', 'public_folder' => 'Accueil', 'index' => 1],
                ],
            ],
        ];
        foreach ($content_pages as $key => $content_page) {
            $accueil = \App\Subpage::all()->where('name', 'accueil')[0];
            $block = DB::table('blocks')->insertGetId([
                'name' => $key
            ]);
            DB::table('block_subpage')->insertGetId([
                'block_id' => $block,
                'subpage_id' => $accueil->id
            ]);

            foreach ($content_page['texts'] as $textObject) {
                $text_id = DB::table('texts')->insertGetId([
                    'htmlContent' => $textObject['text'],
                    'index' => $textObject['index'],
                ]);
                DB::table('block_text')->insertGetId([
                    'text_id' => $text_id,
                    'block_id' => $block,
                ]);
            }
            foreach ($content_page['pictures'] as $textObject) {
                $text_id = DB::table('pictures')->insertGetId([
                    'filename' => $textObject['filename'],
                    'public_folder' => $textObject['public_folder'],
                    'index' => $textObject['index'],
                ]);
                DB::table('block_picture')->insertGetId([
                    'picture_id' => $text_id,
                    'block_id' => $block,
                ]);
            }
        }
        $presentations = [
            'intro' => [
                'texts' => [
                    ['text' => ' Depuis un peu plus de 40 ans Internet c’est imiscisser petit a petit dans nos vie et Grandit.Internet a grandi au point de devenir la Source de divers Métier développeur,intégrateur, gestionnaire de base de données administrateur systeme et reseau.', 'index' => 1],
                    ['text' => '  C\'est pourquoi depuis 20 ans L’iut de Gap pôle gea vous propose d’apprendre le métier de développeur web en 6 mois à travers la Licence Pro Mobilité Internet Webmaster .', 'index' => 2],
                    ['text' => '   Parfaite pour étudié et maîtrisé La création de projet et application dans le domaine du web cette licence vous propose d\'étudier les bases de la création de site ainsi que les différentes technologie utilisé dans les entreprises du secteur.', 'index' => 3],
                ],
                'pictures' => [],
            ],
            'prerequis' => [
                'texts' => [
                    ['text' => 'Prérequis', 'index' => 1],
                    ['text' => 'être titulaire d\'un bac +2 informatique', 'index' => 2],
                    ['text' => 'ou', 'index' => 3],
                    ['text' => 'avoir des connaissance en informatique', 'index' => 4], ['text' => '', 'index' => 4],
                    ['text' => 'être motivé et asssidu', 'index' => 4], ['text' => '', 'index' => 5],
                ],
                'pictures' => [],
            ],
            'target_people' => [
                'texts' => [
                    ['text' => 'Salarié en pleine reconversion professionnel', 'index' => 1],
                    ['text' => 'salarié en formation ', 'index' => 2],
                    ['text' => 'étudiant', 'index' => 3],
                ],
                'pictures' => [
                    ['filename' => 'setup.jpg', 'public_folder' => 'Licence', 'index' => 1],
                    ['filename' => 'worker.jpg', 'public_folder' => 'Licence', 'index' => 2],
                    ['filename' => 'student.jpg', 'public_folder' => 'Licence', 'index' => 3],
                ],
            ],
            'workspace' => [
                'texts' => [
                    ['text' => 'Espace De Travail', 'index' => 1],
                    ['text' => 'La salle informatique, réservée aux étudiants de la licence, est accessible toute la journée grâce à un digicode.', 'index' => 2],
                    ['text' => 'Chaque étudiant dispose d\'un espace de travail personnel pendant toute la formation (bureau, ordinateur récent, logiciels de développement et pour le multimédia).', 'index' => 3],
                    ['text' => 'Les cours sont donnés par des enseignants et ancien eleves issue d\'entreprise informatique et agence web afin de garantir la pertinence des cours et technologie utilisés par les étudiants', 'index' => 4],
                ],
                'pictures' => [
                    ['filename' => 'classroom.jpg', 'public_folder' => 'Licence', 'index' => 1],
                    ['filename' => 'classroom.jpg', 'public_folder' => 'Licence', 'index' => 2],
                ],
            ],
            'hours' => [
                'texts' => [
                    ['text' => 'Volume Horraires', 'index' => 1],
                    ['text' => '550h  de cours', 'index' => 2],
                    ['text' => 'Projet scolaire de 90h', 'index' => 3],
                    ['text' => 'Stage d\'une durée  de 3 a 6 mois', 'index' => 4],
                ],
                'pictures' => [
                    ['filename' => 'reunion.jpg', 'public_folder' => 'Licence', 'index' => 1],
                    ['filename' => 'groupe.jpg', 'public_folder' => 'Licence', 'index' => 2],
                    ['filename' => 'presentation.jpg', 'public_folder' => 'Licence', 'index' => 3],
                ],
            ],
            'admission_inscription' => [
                'texts' => [
                    ['text' => 'Admission et obtention du diplome', 'index' => 1],
                    ['text' => 'obtention du diplome', 'index' => 2],
                    ['text' => 'avoir une moyenne générale > 10', 'index' => 3],
                    ['text' => 'avoir une note aux modules > 8', 'index' => 4],
                    ['text' => 'tout eleves ayant eu une moyenne > 10 et une note à un module  < 8 recevra une attestation notifiant l\'elleves des module a repasser', 'index' => 5],
                    ['text' => 'Procédure d\'inscription', 'index' => 6],
                    ['text' => 'Avec e-candidat', 'index' => 7],
                    ['text' => 'Sans e-candidat', 'index' => 8],
                ],
                'pictures' => [
                ],
            ],
        ];
        foreach ($presentations as $key => $presentation) {
            $accueil = \App\Subpage::all()->where('name', 'presentation')[1];
            $block = DB::table('blocks')->insertGetId([
                'name' => $key
            ]);
            DB::table('block_subpage')->insertGetId([
                'block_id' => $block,
                'subpage_id' => $accueil->id
            ]);

            foreach ($presentation['texts'] as $textObject) {
                $text_id = DB::table('texts')->insertGetId([
                    'htmlContent' => $textObject['text'],
                    'index' => $textObject['index'],
                ]);
                DB::table('block_text')->insertGetId([
                    'text_id' => $text_id,
                    'block_id' => $block,
                ]);
            }
            foreach ($presentation['pictures'] as $textObject) {
                $text_id = DB::table('pictures')->insertGetId([
                    'filename' => $textObject['filename'],
                    'public_folder' => $textObject['public_folder'],
                    'index' => $textObject['index'],
                ]);
                DB::table('block_picture')->insertGetId([
                    'picture_id' => $text_id,
                    'block_id' => $block,
                ]);
            }
        }
        $accueil = \App\Subpage::all()->where('name', 'programme')[2];
        $block = DB::table('blocks')->insertGetId([
            'name' => 'programme'
        ]);
        DB::table('block_subpage')->insertGetId([
            'block_id' => $block,
            'subpage_id' => $accueil->id
        ]);
        $text_id = DB::table('texts')->insertGetId([
            'htmlContent' => '0',
            'index' => 1,
        ]);
        DB::table('block_text')->insertGetId([
            'text_id' => $text_id,
            'block_id' => $block,
        ]);

        $accueil = \App\Subpage::all()->where('name', 'débouché')[3];
        $block = DB::table('blocks')->insertGetId([
            'name' => 'debouche'
        ]);
        DB::table('block_subpage')->insertGetId([
            'block_id' => $block,
            'subpage_id' => $accueil->id
        ]);
        $text_id = DB::table('texts')->insertGetId([
            'htmlContent' => '0',
            'index' => 1,
        ]);
        DB::table('block_text')->insertGetId([
            'text_id' => $text_id,
            'block_id' => $block,
        ]);

        $accueil = \App\Subpage::all()->where('name', 'candidater')[4];
        $block = DB::table('blocks')->insertGetId([
            'name' => 'debouche'
        ]);
        DB::table('block_subpage')->insertGetId([
            'block_id' => $block,
            'subpage_id' => $accueil->id
        ]);
        $text_id = DB::table('texts')->insertGetId([
            'htmlContent' => '0',
            'index' => 1,
        ]);
        DB::table('block_text')->insertGetId([
            'text_id' => $text_id,
            'block_id' => $block,
        ]);

        $accueil = \App\Subpage::all()->where('name', 'livret-or')[5];
        $block = DB::table('blocks')->insertGetId([
            'name' => 'debouche'
        ]);
        DB::table('block_subpage')->insertGetId([
            'block_id' => $block,
            'subpage_id' => $accueil->id
        ]);
        $text_id = DB::table('texts')->insertGetId([
            'htmlContent' => '0',
            'index' => 1,
        ]);
        DB::table('block_text')->insertGetId([
            'text_id' => $text_id,
            'block_id' => $block,
        ]);
      $accueil = \App\Subpage::all()->where('name', 'contact')[6];
        $block = DB::table('blocks')->insertGetId([
            'name' => 'debouche'
        ]);
        DB::table('block_subpage')->insertGetId([
            'block_id' => $block,
            'subpage_id' => $accueil->id
        ]);
        $text_id = DB::table('texts')->insertGetId([
            'htmlContent' => '0',
            'index' => 1,
        ]);
        DB::table('block_text')->insertGetId([
            'text_id' => $text_id,
            'block_id' => $block,
        ]);

    }
}
