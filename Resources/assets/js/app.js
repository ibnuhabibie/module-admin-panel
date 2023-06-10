window.$ = window.jQuery = require("jquery");

require("bootstrap/dist/js/bootstrap.bundle.min");
require("jquery-slimscroll");

window.feather = require("feather-icons");

import axios from "axios";

window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

require("./theme");
