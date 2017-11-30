import $ from 'jquery'
import TM from 'gsap'




/* HOME
----------------------------------------------------------------------------------------------------*/

export default class Home {

    constructor() {

        this.$els = {
            forums1: $('.index__cate--1 .index__forum'),
            forumsBg1: $('.index__cate--1 .index__forum__bg'),
            forumsBtn1: $('.index__cate--1 .index__forum__btn'),
            forums2: $('.index__cate--2 .index__forum'),
            forumsBg2: $('.index__cate--2 .index__forum__bg'),
            forumsBtn2: $('.index__cate--2 .index__forum__btn'),
        }

        this.bindEvents()
    }

     bindEvents() {
        this.$els.forumsBtn1.on('mouseover', (e) => this.hoverForumsBtn(e, true, this.$els.forumsBg1))
        this.$els.forumsBtn1.on('mouseout', (e) => this.hoverForumsBtn(e, false, this.$els.forumsBg1))
        this.$els.forumsBtn1.on('click', (e) => this.clickForumsBtn(e, this.$els.forums1))

        this.$els.forumsBtn2.on('mouseover', (e) => this.hoverForumsBtn(e, true, this.$els.forumsBg2))
        this.$els.forumsBtn2.on('mouseout', (e) => this.hoverForumsBtn(e, false, this.$els.forumsBg2))
        this.$els.forumsBtn2.on('click', (e) => this.clickForumsBtn(e, this.$els.forums2))
     }




    /* Actions
    ---------------------------------------------------------*/

    hoverForumsBtn(event, enter, forumsBg) {
        if(enter) {
            forumsBg.addClass('index__forum__bg--inactive')
            $(event.currentTarget).prev().removeClass('index__forum__bg--inactive')
            $(event.currentTarget).prev().addClass('index__forum__bg--hover')
        }
        else {
            forumsBg.removeClass('index__forum__bg--inactive')
            forumsBg.removeClass('index__forum__bg--hover')
        }
    }

    clickForumsBtn(event, forums) {
        let target = $(event.currentTarget).parent()

        if(target.hasClass('index__forum--open')) {
            target.removeClass('index__forum--open')
            forums.removeClass('index__forum--close')
        }
        else {
            forums.removeClass('index__forum--open')
            forums.addClass('index__forum--close')
            target.removeClass('index__forum--close')
            target.addClass('index__forum--open')
        }
    }




}
