import React, { Component } from 'react';
import axios from 'axios';
import PropTypes from 'prop-types';

export class BookItem extends Component {

    // state propTypes = {
    //     book: PropTypes.object.isRequired
    // }

    render() {
        const {title, excerpt} = this.props.book;
        return (
            <div>
                <h2>{title.rendered}</h2>
                <div dangerouslySetInnerHTML={{ __html: excerpt.rendered}}></div>
            </div>
        )
    }
}

export default BookItem
