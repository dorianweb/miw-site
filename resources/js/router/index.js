import ExampleComponent from "../components/ExampleComponent";

export default {
    mode: 'history',

    routes: [
        {
            path: '/',
            name: 'example',
            component: ExampleComponent,
        },
    ]
}
