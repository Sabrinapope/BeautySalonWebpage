const selectorButtons = document.querySelectorAll('[data-selection]')
const SELECTION = [
    {
        name: 'rock',
        emoji: '✊ ',
        beats: 'scissors'
    },
    {
        name: 'paper',
        emoji: '✋ ',
        beats: 'rock'
    },
    {
        name: 'scissors',
        emoji: '✌️',
        beats: 'paper'
    }
]

selectionButtons.forEach.selectionButton ;
    selectionButton.addEventListner('click', e => {
    const selectionName = selectionButton.dataset.selection
    const selection = SELECTION.find(selection => selection.name === selectionName)
    makeSelection(selectionName)
    }
    
        (selection.) => {
            console.log(selection);
        }