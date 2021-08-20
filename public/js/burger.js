import { NodeHelper }  from './modules/Helpers'
const { getNode, addClass, removeClass } = new NodeHelper()

export const burger =  () => {
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



