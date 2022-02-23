import AllComments from './components/pages/AllComments.vue';
import NewComment from './components/pages/NewComment.vue';
import ReplyComment from './components/pages/ReplyComment.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllComments
    },
    {
        name: 'create',
        path: '/create',
        component: NewComment
    },
    {
        name: 'reply',
        path: '/reply/:id',
        component: ReplyComment
    }
];