
import bookType from './booktype';

const initialState = {
    numOfBooks: 10
}

function bookReducer(state = initialState, action) {
    switch (action.type) {
        case bookType.ADD_BOOK:
            return {
                ...state,
                numOfBooks: state.numOfBooks + 1
            }
            case bookType.BUY_BOOK:
                return {
                    ...state,
                    numOfBooks: state.numOfBooks - 1
                }
        default:
            return state;
    }
}

export default bookReducer;