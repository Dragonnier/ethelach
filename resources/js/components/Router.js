import $ from 'jquery'

// Pages
import Home from './pages/Home'




/* ROUTER
----------------------------------------------------------------------------------------------------*/

export default class Router {

    constructor() {
        let page = null

        if($('body').hasClass('section-index'))
            page = 'home'

        this.initPage(page)
    }




    /* Actions
    ---------------------------------------------------------*/

    initPage(page) {
        switch (page) {
            case 'home' : this.Home = new Home(); break
            default : break
        }
    }

}



