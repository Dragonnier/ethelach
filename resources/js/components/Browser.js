import $ from 'jquery'

/* BROWSER
----------------------------------------------------------------------------------------------------*/

export default class Browser {

    constructor() {
        this.supports = {}

        this.mobile    = (/iPhone|iPad|iPod|Android|webOS|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
        this.Chrome    = navigator.userAgent.indexOf('Chrome') > -1
        this.Explorer  = navigator.userAgent.indexOf('MSIE') > -1
        this.IE10      = navigator.appVersion.indexOf('MSIE 10') > -1
        this.Edge      = /(?:\b(MS)?IE\s+|\bTrident\/7\.0;.*\s+rv:|\bEdge\/)(\d+)/.test(navigator.userAgent)
        this.Firefox   = navigator.userAgent.indexOf('Firefox') > -1
        this.Safari    = navigator.userAgent.indexOf('Safari') > -1
        this.Opera     = navigator.userAgent.indexOf('Presto') > -1
        this.Android   = (navigator.userAgent).toLowerCase().indexOf('android') > -1
        this.iOS       = navigator.userAgent.match(/(iPad|iPhone|iPod)/g)


        if (this.Edge && navigator.userAgent.indexOf('Trident/') > -1) {
            this.Edge = false
            this.IE11 = true
        }

        if (this.Edge || this.Explorer || this.IE10 || this.IE11) {
            this.noFun = true
        }

        if (this.Explorer && !this.IE10) {
            this.IE9 = true
        }


        // Specificities
        if (this.Chrome && this.Safari) { this.Safari = false }
        this.SafariDesktop = (!this.mobile && this.Safari)

        this.iPad   = (/iPad/i.test(navigator.userAgent))
        this.iPhone = (/iPhone|iPod/i.test(navigator.userAgent))

        this.webApp = window.navigator.standalone

        this.addBrowserClass()
        this.detectFeatures()
    }


    // Add relevant class(es)
    addBrowserClass() {
        const $html = $('html')

        if (this.mobile)   $html.addClass('mobile')
        if (this.Android)  $html.addClass('android')
        if (this.iOS)      $html.addClass('iOS')

        if (this.Firefox)  $html.addClass('firefox')
        if (this.Safari)   $html.addClass('safari')
        if (this.Chrome)   $html.addClass('chrome')
        if (this.Explorer) $html.addClass('ie')
        if (this.Edge)     $html.addClass('edge')
        if (this.IE9)      $html.addClass('ie9')
        if (this.IE10)     $html.addClass('ie10')
        if (this.IE11)     $html.addClass('ie11')

        if (this.webApp)   $html.addClass('webapp')
    }


    detectFeatures() {
        let supportsPassive = false

        try {
            const opts = Object.defineProperty({}, 'passive', {
                get: () => {
                    supportsPassive = true
                },
            })

            window.addEventListener('test', null, opts)
        } catch (e) {
            //
        }

        this.supports.passive = supportsPassive
    }

}



