

/*-----------------------------------------------------------------------------------*/
            /*  00. COMPONENTS IMPORTS
/*-----------------------------------------------------------------------------------*/

import Browser from './components/Browser'
import Router from './components/Router'
import Layout from './components/Layout'

const APP = window.APP || {}




/*-----------------------------------------------------------------------------------*/
            /*  01. INIT
/*-----------------------------------------------------------------------------------*/

const initApp = () => {
    window.APP = APP

    APP.Browser = new Browser()
    APP.Router  = new Router()
    APP.Layout  = new Layout()
}

if (document.readyState === 'complete' || (document.readyState !== 'loading' && !document.documentElement.doScroll)) {
    initApp()
} else {
    document.addEventListener('DOMContentLoaded', initApp)
}



