import _ from 'lodash'
import $ from 'jquery'
import TM from 'gsap'




/* LAYOUT
----------------------------------------------------------------------------------------------------*/

export default class Layout {

    constructor() {
        this.$els = {

        }

        this.getLayoutValues()
        this.getDocValues()

        this.dragging      = false
        this.scrollBlocked = false

        this.scrollTimer = null
        this.resizeTimer = null

        this.sections = []

        this.bindEvents()
        setTimeout(() => this.initChildren(), 0)
    }


    bindEvents() {
        // Window events
        $(window).on('resize', () => this.onResize())
        $(window).on('scroll', () => this.onScroll())
        $(window).on('scroll', _.throttle(() => { this.checkOffset() }, 250))


        // Input events
        $(document).on('touchend', () => { this.dragging = false })

        if (APP.Browser.mobile) {
            document.addEventListener('touchmove', (e) => {
                this.onTouchMove(e)
            }, APP.Browser.supports.passive ? { passive: false } : false)
        }
    }


    initChildren() {
    }




    /* Handlers
    ---------------------------------------------------------*/

    onResize() {
        this.getLayoutValues()
        this.getDocValues()

        // Resize timer
        clearTimeout(this.resizeTimer)
        $('body').addClass('resizing')



        this.resizeTimer = setTimeout(() => {
            $('body').removeClass('resizing')

            if (this.widthChanged) {

            }
        }, 150)
    }


    onScroll() {
        this.scrollTop = window.pageYOffset
    }


    onWheel(e) {
        this.wheelDelta = -e.deltaY

        if (this.scrollBlocked) {
            e.preventDefault()
        }

        if (this.wheelDelta !== 0) {
            const direction = (this.wheelDelta > 0) ? 'up' : 'down'

            $(this).trigger('mouseWheel', [direction, this.wheelDelta])
        }
    }


    onTouchMove(e) {
        this.dragging = true

        if (this.scrollBlocked) {
            e.preventDefault()
        }
    }




    /* Actions
    ---------------------------------------------------------*/

    checkOffset() {
        this.sections.forEach((s) => {
            s.checkOffsets()
        })
    }




    /* Values
    ---------------------------------------------------------*/

    getDocValues() {
        this.scrollTop    = window.pageYOffset
        this.docHeight    = $(document).height()
        this.pixelDensity = Math.min(window.devicePixelRatio, 1.5) || 1
    }


    getLayoutValues() {
        if (!this.baseH) this.baseH = window.innerHeight
        if (this.W) this.prevW = this.W

        this.W  = window.innerWidth
        this.H  = window.innerHeight
        this.M  = (this.W <= 960)
        this.S = (this.W <= 720)

        this.widthChanged = this.prevW !== this.W
        this.falseResize  = (APP.Browser.mobile && !this.widthChanged)
    }

}



