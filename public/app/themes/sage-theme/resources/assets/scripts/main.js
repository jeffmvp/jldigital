// import external dependencies
import 'jquery';

// import local dependencies
import Handler from './util/Handler';
import main from './routes/common';

/** Populate Handler instance with DOM routes */
const routes = new Handler({
  // All pages
  main,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
