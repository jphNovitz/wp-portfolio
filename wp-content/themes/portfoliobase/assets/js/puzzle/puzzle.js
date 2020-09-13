/**
 * Puzzle.js
 * mix thumbnail to shuffle the big picture
 * then launch a timer
 * It's a game
 *
 * @author Novitz Jean-Philippe <hello@jphnovitz.be>
 * @created october 2019
 *
 */

/* variables */
var parent = document.getElementById('container-puzzle');

var children = parent.getElementsByClassName('thumb')
const container = document.getElementById('container-puzzle');

container.addEventListener('click', function (e) {

    let target = e.target;
    let up = nPreviousSibling(target, 4)
    let left = nPreviousSibling(target, 1)
    let down = nNextSibling(target, 4)
    let right = nNextSibling(target, 1)
    let index = childIndex(target)

    if (up !== undefined && up !== null && up.id === 't12' ) {
        let temp = target.id
        target.id = up.id
        up.id = temp
    } else if (down !== undefined && down !== null && down.id === 't12') {
        let temp = target.id
        target.id = down.id
        down.id = temp
    } else if (left !== undefined && left !== null && left.id === 't12') {
        let temp = target.id
        target.id = left.id
        left.id = temp
    } else if (right !== undefined && right !== null && right.id === 't12' && index%4 !== 0) {
        let temp = target.id
        target.id = right.id
        right.id = temp
    }

    // let parentId = target.parentNode.id;
    // if (target !== undefined && target.id.startsWith('t')) {
    // }

})

/**
 * @description nNextSibling method determine whether the n sinling of the element exist (n is the level)
 * @param element
 * @param level
 * @returns {*}
 * @author Novitz Jean-Philippe <jphi@jphnovitz.be>
 *
 */
function nNextSibling(element, level) {
    for (let i = 0; i < level; i++) {
        if (element === undefined || element.nextElementSibling === undefined || element.nextElementSibling === null)
            return false;
        element = element.nextElementSibling;
    }
    return element;
}

/**
 * @description nNextSibling method determine whether the n sinling of the element exist (n is the level)
 * @param element
 * @param level
 * @returns {*}
 * @author Novitz Jean-Philippe <jphi@jphnovitz.be>
 */
function nPreviousSibling(element, level) {
    for (let i = 0; i < level; i++) {
        if (element == null || element.previousElementSibling === undefined || element.previousElementSibling === null)
            return false;
        element = element.previousElementSibling;
    }

    return element;
}

/**
 * @description give the index of the element in his parent
 * @param element
 * @returns {number}
 * @author Novitz Jean-Philippe <jphi@jphnovitz.be>
 */
function childIndex(element){
    let children = element.parentNode.children ;
    for (let i = 0 ; i <= children.length; i++){
        if (children[i] === element) return i+1;
    }
    return -1;
}

function showAlert() {
    document.getElementById('indice').style.top = '0px ';
    setTimeout(function () {
        document.getElementById('indice').style.top = '-55px ';
    }, 8000)
}

function shuffle() {

    for (let i = 0; i < 100; i++) {
        setTimeout(function () {
            let target = document.getElementById('t12');
            let up = nPreviousSibling(target, 4);
            let left = nPreviousSibling(target, 1);
            let down = nNextSibling(target, 4);
            let right = nNextSibling(target, 1);
            let randTarget = Math.floor(Math.random() * 4) + 1;
            switch (randTarget) {
                case 1:
                    if (up) {
                        console.log(target.id)
                        let temp = target.id
                        target.id = up.id
                        up.id = temp
                    } else i--;
                    break;
                case 2:
                    if (left) {
                        let temp = target.id
                        target.id = left.id
                        left.id = temp
                    } else i--;
                    break;
                case 3:
                    if (down) {
                        let temp = target.id
                        target.id = down.id
                        down.id = temp
                    } else i--;
                    break;
                case 4:
                    if (right && childIndex(target) % 4 !== 0) { // childIndex avoid swapping righter uo and lefter under it
                        let temp = target.id
                        target.id = right.id
                        right.id = temp
                    } else i--;
                    break;

            }
        }, 850 * i, i)
    }

}

// document.getElementById('t12').style.backgroundImage='none';
setTimeout(function () {
    shuffle();
}, 8000)