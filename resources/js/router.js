import ExampleComponent from "./components/ExampleComponent";
import NavbarComponent from "./components/NavbarComponent";
export default {
    mode: 'history',

    routes: [
        {
            path: '/',
            name: 'home',
            component:NavbarComponent,
        },

        {
            path: '/about',
            name: 'about',
            component:ExampleComponent,
        },
    ]
}
