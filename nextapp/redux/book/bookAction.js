import bookType from './booktype';

export function addBook() {
    return { type: bookType.ADD_BOOK }
}

export function buyBook() {
    return { type: bookType.BUY_BOOK }
}