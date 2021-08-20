// Importing Helpers
// import { NodeHelper,  FuncsHelper }  from './modules/Helpers'
// import { burger } from './burger'





class NodeHelper {

    getNode = $node =>  document.querySelector($node)

    getNodes = $nodes =>  document.querySelectorAll($nodes)

    addClass = ($node, className = '') => {
        if (typeof $node === 'string') {
            const $element = this.getNode($node) 
            if ($element) {
                $element.classList.add(className)
            }
            return ''
        }
        $node.classList.add(className)
    }

    removeClass = ($node, className = '') => {
        if (typeof $node === 'string') {
            const $element = this.getNode($node) 
            if ($element) {
                $element.classList.remove(className)
            }
            return ''
        }
        $node.classList.remove(className)
    }

    nextNode = ($currentNode) => {
        if (typeof $currentNode === 'string') {
            const $element = this.getNode($currentNode) 
            if ($element) {
                return $element.nextElementSibling
            }
        }
        return $currentNode.nextElementSibling
    }

}

// Getting Methods from Helpers
const { getNode, getNodes, addClass, removeClass, nextNode } = new NodeHelper()


const burger =  () => {
    const $headerAction = getNode('.header__actions'),
          $closeHeaderBtn = getNode('.close-header'),
          $burger = getNode('.burger')

    const onBurgerOpen = () => {   
        addClass($headerAction, 'header__actions_visible')
    }

    const onBurgerClose = () => {   
        removeClass($headerAction, 'header__actions_visible')
    }
  
    $burger.addEventListener('click', onBurgerOpen)
    $closeHeaderBtn.addEventListener('click', onBurgerClose)
    
}



let preloader = () => {
    if(getNode('.preloader')){
        let counter = 0;

        let $counterNode = getNode(".preloader__counter"),
            $textNodes = getNodes(".preloader__text"), 
            $preloaderNode = getNode('.preloader');
    
        
            let i = setInterval(() => {
                counter++;
                if(counter === 5){
                    addClass($textNodes[0], 'active')
                }
                if(counter === 25){
                    removeClass($textNodes[0], 'active')
                }
                if(counter === 45){
                    addClass($textNodes[1], 'active')
                }
                if(counter === 65){
                    removeClass($textNodes[1], 'active')
                }
                if(counter === 85){
                    addClass($textNodes[2], 'active')
                }
                if(counter === 100){
                    $textNodes[2].style.transform = 'translateX(0) rotate(0) translateY(0)'
                    $textNodes[2].style.top = '20px';
                    $textNodes[2].style.left = '20px';
                    // removeClass($textNodes[2], 'active')
                }
    
        
                $counterNode.textContent = `${counter}%`;
                if (counter === 100) {
                  setTimeout(() => {
                    // $preloaderNode.style.top = "-100%"
                    $preloaderNode.style.opacity = "0"
                    setTimeout(() => {
                        $preloaderNode.style.display = "none"
                      }, 1000);
                  }, 1500);
                  clearInterval(i);
                }
              }, 60);
    }
}
preloader();


const $heroTitles = getNodes('.hero__content-title'),
      $links = getNodes('[data-link]'),
      $arrowLinkTarget = getNode('.hero__circle-link')

function SliderSwiper($heroTitles, $links, $arrowLinkTarget){
    const swiper = new Swiper('.swiper-container', {
        direction: 'vertical',
        speed: 1200,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        mousewheel: {
            invert: false
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets'
        },
        on: {
            init: function() {
             
                if ($heroTitles.length) {
                    $heroTitles[0].classList.add('hero__content-title_visible')
                    $arrowLinkTarget.setAttribute('href', `/${$links[0].dataset.link}`)
                }
              
            }
        }
    })
    
    
    swiper.on('slideChange', ( { activeIndex } ) => {
        if ($heroTitles.length) {
            $heroTitles[activeIndex].classList.add('hero__content-title_visible')
            $arrowLinkTarget.setAttribute('href', `/${$links[activeIndex].dataset.link}`)
        }
    })
    
    const thumbsSlider = new Swiper('.swiper-container-thumbs', {
        slidesPerView: 3,
        allowTouchMove	: false
    })
    
    const singleSwiper = new Swiper('.swiper-container-single', {
        slidesPerView: 1,
        thumbs: {
            swiper: thumbsSlider
        }
    })
}


function Acardion(){
    function onAccordeon()  {
        const accordeonBodyHeight = this.nextElementSibling.scrollHeight
        const height = this.nextElementSibling.style.maxHeight
    
        if (!height || height === '0px') {
            this.classList.add('accordeon-open')
            this.nextElementSibling.style.maxHeight = accordeonBodyHeight + 'px'
        } else {
            this.nextElementSibling.style.maxHeight = 0
            this.classList.remove('accordeon-open')
        }
    }
    
    const $accordeonHeaders = getNodes('.accordeon__head')
    $accordeonHeaders.forEach(item => {
        if (item.classList.contains('accordeon-open')) {
            item.nextElementSibling.style.maxHeight = item.nextElementSibling.scrollHeight + 'px'
        }
        item.addEventListener('click', onAccordeon)
    })
}

// let $scrollParent = getNode('[data-scroll-container]');
// if ($scrollParent) {
//     scroll = new LocomotiveScroll({
//         el: $scrollParent,
//         smooth: true
//     });
// }


// function scrollParent(){
//     let $scrollParent = getNode('[data-scroll-container]')
//     if ($scrollParent) {
//         let scroll = new LocomotiveScroll({
//             el: $scrollParent,
//             smooth: true
//         });
//     }
// }


function init(){
    const { getNode, getNodes, addClass, removeClass, nextNode } = new NodeHelper()

    const $heroTitles = getNodes('.hero__content-title'),
      $links = getNodes('[data-link]'),
      $arrowLinkTarget = getNode('.hero__circle-link')
    
    // let $scrollParent = getNode('[data-scroll-container]')
    // scrollParent()

    Acardion()
    SliderSwiper($heroTitles, $links, $arrowLinkTarget)
    burger()
}

init()

const swup = new Swup({
    plugins: [
        new SwupSlideTheme(),
    ],
});

swup.on("willReplaceContent", function () {
    // scroll.destroy();
    // console.log('object 1')
});

swup.on("contentReplaced", function () {
    init()
});
// swup.on("transitionEnd", function () {
//     scroll.init();
//     // scroll.update();
//     // scrollDetect();
// });
