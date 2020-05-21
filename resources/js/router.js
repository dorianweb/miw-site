import AccueilComponent from "./components/AccueilComponent";
import LicenceComponent from "./components/licence/LicenceComponent";
import PresentationComponent from "./components/licence/page/PresentationComponent";
import CompetenceComponent from "./components/licence/page/CompetenceComponent";
import ProgrammeComponent from "./components/licence/page/ProgrammeComponent";
import MetierComponent from "./components/licence/page/MetierComponent";

export default {
    mode: 'history',

    routes: [
        {
            path: '/',
            redirect: '/accueil',
        },
        {
            path: '/accueil',
            name: 'Accueil',
            component: AccueilComponent,
        },
        {
            path: '/presentation',
            name: 'Presentation',
            component: LicenceComponent,
            children: [
                {path: '', component: PresentationComponent},
                {path: 'presentation', component: PresentationComponent},
                {path: 'debouché', component: CompetenceComponent},
                {path: 'programme', component: ProgrammeComponent},
                {path: 'livret-dor', component: MetierComponent},
            ]
        },
    ]
}
