import $ from 'jquery'
import TM from 'gsap'




/* HOME
----------------------------------------------------------------------------------------------------*/

export default class Home {

    constructor() {

        this.$els = {
            forums: $('.index__forum'),
            forumsBg: $('.index__forum__bg'),
            forumsBtn: $('.index__forum__btn'),
        }

        this.bindEvents()
    }

     bindEvents() {

        this.$els.forumsBtn.on('mouseover', (e) => this.hoverForumsBtn(e, true))
        this.$els.forumsBtn.on('mouseout', (e) => this.hoverForumsBtn(e, false))
        this.$els.forumsBtn.on('click', (e) => this.clickForumsBtn(e))
     }




    /* Actions
    ---------------------------------------------------------*/

    hoverForumsBtn(event, enter) {
        if(enter) {
            this.$els.forumsBg.addClass('index__forum__bg--inactive')
            $(event.currentTarget).prev().removeClass('index__forum__bg--inactive')
            $(event.currentTarget).prev().addClass('index__forum__bg--hover')
        }
        else {
            this.$els.forumsBg.removeClass('index__forum__bg--inactive')
            this.$els.forumsBg.removeClass('index__forum__bg--hover')
        }
    }

    clickForumsBtn(event) {
        let target = $(event.currentTarget).parent()

        if(target.hasClass('index__forum--open')) {
            target.removeClass('index__forum--open')
            this.$els.forums.removeClass('index__forum--close')
        }
        else {
            this.$els.forums.removeClass('index__forum--open')
            this.$els.forums.addClass('index__forum--close')
            target.removeClass('index__forum--close')
            target.addClass('index__forum--open')
        }
    }




}
