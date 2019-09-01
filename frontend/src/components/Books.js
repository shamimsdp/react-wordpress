import React, { Component } from 'react';
import BookItem from './BookItem';
import axios from 'axios';

export class Books extends Component {
    state = {
        books: [],
        isLoaded: false,
    }

    componentDidMount() {
        // axios.get('http://localhost/react-wordpress/wp-json/wp/v2/books')
        axios.get('http://localhost:99/wpreact/wp-json/wp/v2/books')
            .then(res => this.setState({
                books: res.data,
                isLoaded: true
            }))
            .catch(err => console.log(err));
    }

    render() {
        const { books, isLoaded } = this.state;

        if (isLoaded) {
            console.log('isLoaded');
            
        }

        return (
            <div>
                {books.map(book => (
                    <BookItem book={book} key={book.id}></BookItem>
                ))}
            </div>
        )
        
    }
}

export default Books
