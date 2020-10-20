/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */
require('./bootstrap');
import React from 'react';
import ReactDOM from 'react-dom';
import Index from './components/IndexPage/Index';
import Header from './components/Header/Header';


ReactDOM.render(
    <Index />,
    document.getElementById('root'));
