import ExampleComponent from "./components/ExampleComponent";
import AccueilComponent from "./components/AccueilComponent";
import LicenceComponent from "./components/licence/LicenceComponent";
import PresentationComponent from "./components/licence/page/PresentationComponent";

export default {
    mode: 'history',

    routes: [
        {
            path: '/environnement',
            name: 'Environement',
            component:ExampleComponent,
        },  {
            path: '/',
            name: 'Accueil',
            component:AccueilComponent,
        },

        {
            path: '/licence',
            name: 'Licence',
            component:LicenceComponent,
        },

        {
            path: '/contact',
            name: 'Contact',
            component:ExampleComponent,
        },
        {
            path: '/students',
            name: 'Etudiants',
            component:ExampleComponent,
        },
    ]
}
