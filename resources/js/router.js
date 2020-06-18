import AccueilComponent from "./components/AccueilComponent";
import LicenceComponent from "./components/licence/LicenceComponent";
import PresentationComponent from "./components/licence/page/PresentationComponent";
import CompetenceComponent from "./components/licence/page/CompetenceComponent";
import ProgrammeComponent from "./components/licence/page/ProgrammeComponent";
import MetierComponent from "./components/licence/page/MetierComponent";
import BackendComponent from "./components/backend/BackendComponent";
import LoginComponent from "./components/backend/pages/LoginComponent";
import Store from './store/store';
import MainComponent from "./components/backend/pages/TextsComponent";
import PicturesCommponent from "./components/backend/pages/PicturesCommponent";
import TextChangeComponent from "./components/backend/pages/changes/TextChangeComponent";
import PictureChangeComponent from "./components/backend/pages/changes/PictureChangeComponent";
import PreviewComponent from "./components/backend/pages/PreviewComponent";

export default {
    mode: 'history',

    routes: [
        {path: '/', redirect: '/accueil',},
        {path: '/accueil', name: 'Accueil', component: AccueilComponent,},
        {
            path: '/presentation',
            name: 'Presentation',
            component: LicenceComponent,
            children: [
                {path: '', redirect: 'presentation'},
                {path: 'presentation', component: PresentationComponent},
                {path: 'débouché', component: CompetenceComponent},
                {path: 'programme', component: ProgrammeComponent},
                {path: 'livret-or', component: PreviewComponent},
                {path: 'candidater', component: MetierComponent},
            ]
        },
        {
            path: '/backend',
            name: 'Backend',
            component: BackendComponent,
            beforeEnter: (to, from, next) => check(to, from, next),
            children: [
                {path: 'login', component: LoginComponent},
                {path: 'texts', component: MainComponent},
                {path: 'pictures', component: PicturesCommponent},
                {path: 'preview', component: PreviewComponent},
                {path: 'change', name: 'ckeditor', component: TextChangeComponent,},
                {path: 'changeimg', name: 'imgeditor', component: PictureChangeComponent,},
            ]
        },
    ]
}
const check = (to, from, next) => {
    if (Store.state.auth.isAuth) {
        if (to.fullPath == '/backend/login') {
            next('/');
        } else {
            next();
        }
    } else {
        if (to.fullPath == '/backend/login') {
            next();
        } else {
            next('backend/login')
        }
    }
};
