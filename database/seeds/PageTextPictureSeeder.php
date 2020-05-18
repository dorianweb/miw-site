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
            'Presentation' => ['presentation', 'programme', 'débouché', 'Dossier candidature', 'livret d\' or'],
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
                    'page_id'=> $dbpage
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
            ], 'screen5' => [
                'texts' => [
                    ['text' => 'prochaine date :', 'index' => 1],
                ],
                'pictures' => [
                    ['filename' => 'mountain.png', 'public_folder' => 'Accueil', 'index' => 1],
                ],
            ],
        ];

        foreach ($content_pages as $key => $content_page) {
            $accueil =\App\Subpage::all()->where('name','accueil')[0];
            $block = DB::table('blocks')->insertGetId([
                'name' => $key
            ]);
            DB::table('block_subpage')->insertGetId([
                'block_id' => $block,
                'subpage_id'=> $accueil->id
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
            } foreach ($content_page['pictures'] as $textObject) {
                $text_id = DB::table('pictures')->insertGetId([
                    'filename' => $textObject['filename'],
                    'public_folder'=>$textObject['public_folder'],
                    'index' => $textObject['index'],
                ]);
                DB::table('block_picture')->insertGetId([
                    'picture_id' => $text_id,
                    'block_id' => $block,
                ]);
            }
        }
    }
}
