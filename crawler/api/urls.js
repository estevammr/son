'use strict';

const mongoose = require('mongoose');

const Urls = new mongoose.Schema({
  url: {
    type: String,
    required: false
  }
});

module.export = mongoose.model('urls', Urls);