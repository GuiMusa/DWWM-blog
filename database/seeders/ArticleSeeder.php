<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('articles')->insert([
            [
                'title' => 'Découvrir les bases du jardinage urbain',
                'slug' => 'decouvrir-les-bases-du-jardinage-urbain',
                'content' => 'Le jardinage urbain permet de cultiver des plantes même en appartement. Il suffit de quelques pots, d’un bon terreau et de beaucoup de lumière. C’est une activité relaxante qui apporte une touche de verdure dans la vie quotidienne.',
                'created_at' => Carbon::parse('2026-07-01 10:15:00'),
            ],
            [
                'title' => 'Comment choisir son premier vélo électrique',
                'slug' => 'comment-choisir-son-premier-velo-electrique',
                'content' => 'Le marché du vélo électrique a explosé ces dernières années. Avant d’acheter, il faut évaluer l’autonomie, le type de moteur et le confort général. Un essai en magasin reste indispensable pour trouver le modèle qui correspond à vos trajets.',
                'created_at' => Carbon::parse('2026-07-02 14:30:00'),
            ],
            [
                'title' => 'Les bienfaits méconnus de la sieste courte',
                'slug' => 'les-bienfaits-meconnus-de-la-sieste-courte',
                'content' => 'Une sieste de vingt minutes améliore la concentration et réduit le stress. Contrairement aux idées reçues, elle n’empêche pas de dormir la nuit. Beaucoup d’entreprises commencent à aménager des espaces dédiés pour leurs employés.',
                'created_at' => Carbon::parse('2026-07-03 08:45:00'),
            ],
            [
                'title' => 'Introduction à la photographie minimaliste',
                'slug' => 'introduction-a-la-photographie-minimaliste',
                'content' => 'La photographie minimaliste repose sur le principe “moins c’est plus”. Elle consiste à éliminer les éléments superflus pour ne garder que l’essentiel. Une composition épurée et une lumière douce sont les clés de ce style apaisant.',
                'created_at' => Carbon::parse('2026-07-03 16:20:00'),
            ],
            [
                'title' => 'Recette facile de pancakes sans lactose',
                'slug' => 'recette-facile-de-pancakes-sans-lactose',
                'content' => 'Pour des pancakes moelleux sans lactose, mélangez de la farine, du lait d’amande, un œuf et une pincée de levure. Faites cuire à feu moyen dans une poêle antiadhésive. Servez avec du sirop d’érable ou des fruits frais.',
                'created_at' => Carbon::parse('2026-07-04 09:10:00'),
            ],
            [
                'title' => 'Pourquoi apprendre le langage Python en 2026',
                'slug' => 'pourquoi-apprendre-le-langage-python-en-2026',
                'content' => 'Python reste l’un des langages les plus polyvalents, utilisé en data science, développement web et automatisation. Sa syntaxe claire en fait un excellent choix pour débuter la programmation. La demande sur le marché du travail continue de croître.',
                'created_at' => Carbon::parse('2026-07-04 15:45:00'),
            ],
            [
                'title' => 'Les secrets d’une bonne organisation personnelle',
                'slug' => 'les-secrets-dune-bonne-organisation-personnelle',
                'content' => 'L’organisation personnelle ne repose pas seulement sur des outils, mais surtout sur des habitudes. Planifier sa journée la veille, limiter les distractions et se fixer trois priorités maximum permet de gagner en efficacité sans se surmener.',
                'created_at' => Carbon::parse('2026-07-05 11:00:00'),
            ],
            [
                'title' => 'Créer un petit potager sur un balcon',
                'slug' => 'creer-un-petit-potager-sur-un-balcon',
                'content' => 'Même sans jardin, il est possible de faire pousser des tomates cerises, des herbes aromatiques ou des radis sur un balcon. Choisissez des bacs profonds, un bon terreau et un arrosage régulier. La récolte maison a un goût incomparable.',
                'created_at' => Carbon::parse('2026-07-05 17:30:00'),
            ],
            [
                'title' => 'Comprendre le fonctionnement des cryptomonnaies',
                'slug' => 'comprendre-le-fonctionnement-des-cryptomonnaies',
                'content' => 'Les cryptomonnaies reposent sur la technologie blockchain, un registre décentralisé et sécurisé. Bitcoin, Ethereum et bien d’autres permettent des transactions sans intermédiaire. Avant d’investir, il est essentiel de se former sur les risques et le fonctionnement des wallets.',
                'created_at' => Carbon::parse('2026-07-06 09:25:00'),
            ],
            [
                'title' => 'Bien débuter la course à pied sans se blesser',
                'slug' => 'bien-debuter-la-course-a-pied-sans-se-blesser',
                'content' => 'Pour commencer la course à pied, alternez marche et course sur de courtes durées. Investissez dans de bonnes chaussures et augmentez la distance progressivement. L’échauffement et les étirements sont indispensables pour éviter les blessures.',
                'created_at' => Carbon::parse('2026-07-07 07:00:00'),
            ],
        ]);
    }
}
