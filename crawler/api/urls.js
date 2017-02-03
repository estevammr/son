'use strict';

const mongoose = require('mongoose');

const Urls = new mongoose.Schema({
    url: {
        type: String,
        required: false
    }
});

module.exports = mongoose.model('urls', Urls);