import ExampleComponent from "./components/ExampleComponent";
import NavbarComponent from "./components/NavbarComponent";
export default {
    mode: 'history',

    routes: [
        {
            path: '/environnement',
            name: 'Environement',
            component:ExampleComponent,
        },

        {
            path: '/licence',
            name: 'Licence',
            component:ExampleComponent,
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
