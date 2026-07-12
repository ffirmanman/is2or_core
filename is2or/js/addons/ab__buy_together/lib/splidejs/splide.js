
 (function() {
 	"use strict";
 
 	var __webpack_require__ = {};


 	
 	!function() {
 	
 		__webpack_require__.d = function(exports, definition) {
 			for(var key in definition) {
 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
 				}
 			}
 		};
 	}();

 	
 	!function() {
 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
 	}();

 	
 	!function() {
 	
 		__webpack_require__.r = function(exports) {
 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
 			}
 			Object.defineProperty(exports, '__esModule', { value: true });
 		};
 	}();


var states_namespaceObject = {};
__webpack_require__.r(states_namespaceObject);
__webpack_require__.d(states_namespaceObject, {
"CREATED": function() { return CREATED; },
"DESTROYED": function() { return DESTROYED; },
"IDLE": function() { return IDLE; },
"MOUNTED": function() { return MOUNTED; },
"MOVING": function() { return MOVING; }
});



 var core_event = (function () {

var data = [];
var Event = {

on: function on(events, handler, elm, options) {
if (elm === void 0) {
elm = null;
}
if (options === void 0) {
options = {};
}
events.split(' ').forEach(function (event) {
if (elm) {
elm.addEventListener(event, handler, options);
}
data.push({
event: event,
handler: handler,
elm: elm,
options: options
});
});
},

off: function off(events, elm) {
if (elm === void 0) {
elm = null;
}
events.split(' ').forEach(function (event) {
data = data.filter(function (item) {
if (item && item.event === event && item.elm === elm) {
unsubscribe(item);
return false;
}
return true;
});
});
},

emit: function emit(event) {
for (var _len = arguments.length, args = new Array(_len > 1 ? _len - 1 : 0), _key = 1; _key < _len; _key++) {
args[_key - 1] = arguments[_key];
}
data.forEach(function (item) {
if (!item.elm && item.event.split('.')[0] === event) {
item.handler.apply(item, args);
}
});
},

destroy: function destroy() {
data.forEach(unsubscribe);
data = [];
}
};

function unsubscribe(item) {
if (item.elm) {
item.elm.removeEventListener(item.event, item.handler, item.options);
}
}
return Event;
});



 var state = (function (initialState) {

var curr = initialState;
return {

set: function set(state) {
curr = state;
},

is: function is(state) {
return state === curr;
}
};
});

function _extends() { _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; }; return _extends.apply(this, arguments); }

var keys = Object.keys;

function each(obj, callback) {
keys(obj).some(function (key, index) {
return callback(obj[key], key, index);
});
}

function values(obj) {
return keys(obj).map(function (key) {
return obj[key];
});
}

function isObject(subject) {
return typeof subject === 'object';
}

function merge(_ref, from) {
var to = _extends({}, _ref);
each(from, function (value, key) {
if (isObject(value)) {
if (!isObject(to[key])) {
to[key] = {};
}
to[key] = merge(to[key], value);
} else {
to[key] = value;
}
});
return to;
}

function object_assign(to, from) {
keys(from).forEach(function (key) {
if (!to[key]) {
Object.defineProperty(to, key, Object.getOwnPropertyDescriptor(from, key));
}
});
return to;
}



function toArray(value) {
return Array.isArray(value) ? value : [value];
}

function between(value, m1, m2) {
return Math.min(Math.max(value, m1 > m2 ? m2 : m1), m1 > m2 ? m1 : m2);
}

function sprintf(format, replacements) {
var i = 0;
return format.replace(/%s/g, function () {
return toArray(replacements)[i++];
});
}

function unit(value) {
var type = typeof value;
if (type === 'number' && value > 0) {
return parseFloat(value) + 'px';
}
return type === 'string' ? value : '';
}

function pad(number) {
return number < 10 ? '0' + number : number;
}

function toPixel(root, value) {
if (typeof value === 'string') {
var div = create('div', {});
applyStyle(div, {
position: 'absolute',
width: value
});
append(root, div);
value = div.clientWidth;
dom_remove(div);
}
return +value || 0;
}



function find(elm, selector) {
return elm ? elm.querySelector(selector.split(' ')[0]) : null;
}

function child(parent, tagOrClassName) {
return children(parent, tagOrClassName)[0];
}

function children(parent, tagOrClassName) {
if (parent) {
return values(parent.children).filter(function (child) {
return hasClass(child, tagOrClassName.split(' ')[0]) || child.tagName === tagOrClassName;
});
}
return [];
}

function create(tag, attrs) {
var elm = document.createElement(tag);
each(attrs, function (value, key) {
return setAttribute(elm, key, value);
});
return elm;
}

function domify(html) {
var div = create('div', {});
div.innerHTML = html;
return div.firstChild;
}

function dom_remove(elms) {
toArray(elms).forEach(function (elm) {
if (elm) {
var parent = elm.parentElement;
parent && parent.removeChild(elm);
}
});
}

function append(parent, child) {
if (parent) {
parent.appendChild(child);
}
}

function before(elm, ref) {
if (elm && ref) {
var parent = ref.parentElement;
parent && parent.insertBefore(elm, ref);
}
}

function applyStyle(elm, styles) {
if (elm) {
each(styles, function (value, prop) {
if (value !== null) {
elm.style[prop] = value;
}
});
}
}

function addOrRemoveClasses(elm, classes, remove) {
if (elm) {
toArray(classes).forEach(function (name) {
if (name) {
elm.classList[remove ? 'remove' : 'add'](name);
}
});
}
}

function addClass(elm, classes) {
addOrRemoveClasses(elm, classes, false);
}

function removeClass(elm, classes) {
addOrRemoveClasses(elm, classes, true);
}

function hasClass(elm, className) {
return !!elm && elm.classList.contains(className);
}

function setAttribute(elm, name, value) {
if (elm) {
elm.setAttribute(name, value);
}
}

function getAttribute(elm, name) {
return elm ? elm.getAttribute(name) : '';
}

function removeAttribute(elms, names) {
toArray(names).forEach(function (name) {
toArray(elms).forEach(function (elm) {
return elm && elm.removeAttribute(name);
});
});
}

function getRect(elm) {
return elm.getBoundingClientRect();
}

function loaded(elm, callback) {
var images = elm.querySelectorAll('img');
var length = images.length;
if (length) {
var count = 0;
each(images, function (img) {
img.onload = img.onerror = function () {
if (++count === length) {
callback();
}
};
});
} else {
callback();
}
}



var SLIDE = 'slide';

var LOOP = 'loop';

var FADE = 'fade';



 var slide = (function (Splide, Components) {

var list;

var endCallback;
return {

mount: function mount() {
list = Components.Elements.list;
Splide.on('transitionend', function (e) {
if (e.target === list && endCallback) {
endCallback();
}
}, list);
},

start: function start(destIndex, newIndex, prevIndex, coord, done) {
var options = Splide.options;
var edgeIndex = Components.Controller.edgeIndex;
var speed = options.speed;
endCallback = done;
if (Splide.is(SLIDE)) {
if (prevIndex === 0 && newIndex >= edgeIndex || prevIndex >= edgeIndex && newIndex === 0) {
speed = options.rewindSpeed || speed;
}
}
applyStyle(list, {
transition: "transform " + speed + "ms " + options.easing,
transform: "translate(" + coord.x + "px," + coord.y + "px)"
});
}
};
});



 var fade = (function (Splide, Components) {
var Fade = {

mount: function mount() {
apply(Splide.index);
},

start: function start(destIndex, newIndex, prevIndex, coord, done) {
var track = Components.Elements.track;
applyStyle(track, {
height: unit(track.clientHeight)
});
apply(newIndex);
setTimeout(function () {
done();
applyStyle(track, {
height: ''
});
});
}
};

function apply(index) {
var options = Splide.options;
applyStyle(Components.Elements.slides[index], {
transition: "opacity " + options.speed + "ms " + options.easing
});
}
return Fade;
});





function compose(Splide, Components, Transition) {
var components = {};
each(Components, function (Component, name) {
components[name] = Component(Splide, components, name.toLowerCase());
});
if (!Transition) {
Transition = Splide.is(FADE) ? fade : slide;
}
components.Transition = Transition(Splide, components);
return components;
}



var MESSAGE_PREFIX = '[SPLIDE]';

function error(message) {
console.error(MESSAGE_PREFIX + " " + message);
}

function exist(subject, message) {
if (!subject) {
throw new Error(message);
}
}



var ROOT = 'splide';

var ELEMENT_CLASSES = {
root: ROOT,
slider: ROOT + "__slider",
track: ROOT + "__track",
list: ROOT + "__list",
slide: ROOT + "__slide",
container: ROOT + "__slide__container",
arrows: ROOT + "__arrows",
arrow: ROOT + "__arrow",
prev: ROOT + "__arrow--prev",
next: ROOT + "__arrow--next",
pagination: ROOT + "__pagination",
page: ROOT + "__pagination__page",
clone: ROOT + "__slide--clone",
progress: ROOT + "__progress",
bar: ROOT + "__progress__bar",
autoplay: ROOT + "__autoplay",
play: ROOT + "__play",
pause: ROOT + "__pause",
spinner: ROOT + "__spinner",
sr: ROOT + "__sr"
};

var STATUS_CLASSES = {
active: 'is-active',
visible: 'is-visible',
loading: 'is-loading'
};



var I18N = {
prev: 'Previous slide',
next: 'Next slide',
first: 'Go to first slide',
last: 'Go to last slide',
slideX: 'Go to slide %s',
pageX: 'Go to page %s',
play: 'Start autoplay',
pause: 'Pause autoplay'
};


var DEFAULTS = {

type: 'slide',

rewind: false,

speed: 400,

rewindSpeed: 0,

waitForTransition: true,

width: 0,

height: 0,

fixedWidth: 0,

fixedHeight: 0,

heightRatio: 0,

autoWidth: false,

autoHeight: false,

perPage: 1,

perMove: 0,

clones: 0,

start: 0,

focus: false,

gap: 0,

padding: 0,

arrows: true,

arrowPath: '',

pagination: true,

autoplay: false,

interval: 5000,

pauseOnHover: true,

pauseOnFocus: true,

resetProgress: true,

lazyLoad: false,

preloadPages: 1,

easing: 'cubic-bezier(.42,.65,.27,.99)',

keyboard: 'global',

drag: true,

dragAngleThreshold: 30,

swipeDistanceThreshold: 150,

flickVelocityThreshold: .6,

flickPower: 600,

flickMaxPages: 1,

direction: 'ltr',

cover: false,

accessibility: true,

slideFocus: true,

isNavigation: false,

trimSpace: true,

updateOnMove: false,

throttle: 100,

destroy: false,

breakpoints: false,

classes: ELEMENT_CLASSES,

i18n: I18N
};



var CREATED = 1;

var MOUNTED = 2;

var IDLE = 3;

var MOVING = 4;

var DESTROYED = 5;

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }


var Splide = function () {

function Splide(root, options, Components) {
if (options === void 0) {
options = {};
}
if (Components === void 0) {
Components = {};
}
this.root = root instanceof Element ? root : document.querySelector(root);
exist(this.root, 'An invalid element/selector was given.');
this.Components = null;
this.Event = core_event();
this.State = state(CREATED);
this.STATES = states_namespaceObject;
this._o = merge(DEFAULTS, options);
this._i = 0;
this._c = Components;
this._e = {};
this._t = null;
}

var _proto = Splide.prototype;
_proto.mount = function mount(Extensions, Transition) {
var _this = this;
if (Extensions === void 0) {
Extensions = this._e;
}
if (Transition === void 0) {
Transition = this._t;
}
this.State.set(CREATED);
this._e = Extensions;
this._t = Transition;
this.Components = compose(this, merge(this._c, Extensions), Transition);
try {
each(this.Components, function (component, key) {
var required = component.required;
if (required === undefined || required) {
component.mount && component.mount();
} else {
delete _this.Components[key];
}
});
} catch (e) {
error(e.message);
return;
}
var State = this.State;
State.set(MOUNTED);
each(this.Components, function (component) {
component.mounted && component.mounted();
});
this.emit('mounted');
State.set(IDLE);
this.emit('ready');
applyStyle(this.root, {
visibility: 'visible'
});
this.on('move drag', function () {
return State.set(MOVING);
}).on('moved dragged', function () {
return State.set(IDLE);
});
return this;
}

;
_proto.sync = function sync(splide) {
this.sibling = splide;
return this;
}

;
_proto.on = function on(events, handler, elm, options) {
if (elm === void 0) {
elm = null;
}
if (options === void 0) {
options = {};
}
this.Event.on(events, handler, elm, options);
return this;
}

;
_proto.off = function off(events, elm) {
if (elm === void 0) {
elm = null;
}
this.Event.off(events, elm);
return this;
}

;
_proto.emit = function emit(event) {
var _this$Event;
for (var _len = arguments.length, args = new Array(_len > 1 ? _len - 1 : 0), _key = 1; _key < _len; _key++) {
args[_key - 1] = arguments[_key];
}
(_this$Event = this.Event).emit.apply(_this$Event, [event].concat(args));
return this;
}

;
_proto.go = function go(control, wait) {
if (wait === void 0) {
wait = this.options.waitForTransition;
}
if (this.State.is(IDLE) || this.State.is(MOVING) && !wait) {
this.Components.Controller.go(control, false);
}
return this;
}

;
_proto.is = function is(type) {
return type === this._o.type;
}

;
_proto.add = function add(slide, index) {
if (index === void 0) {
index = -1;
}
this.Components.Elements.add(slide, index, this.refresh.bind(this));
return this;
}

;
_proto.remove = function remove(index) {
this.Components.Elements.remove(index);
this.refresh();
return this;
}

;
_proto.refresh = function refresh() {
this.emit('refresh:before').emit('refresh').emit('resize');
return this;
}

;
_proto.destroy = function destroy(completely) {
var _this2 = this;
if (completely === void 0) {
completely = true;
}
if (this.State.is(CREATED)) {
this.on('ready', function () {
return _this2.destroy(completely);
});
return;
}
values(this.Components).reverse().forEach(function (component) {
component.destroy && component.destroy(completely);
});
this.emit('destroy', completely);
this.Event.destroy();
this.State.set(DESTROYED);
return this;
}

,
set: function set(index) {
this._i = parseInt(index);
}

}, {
key: "length",
get: function get() {
return this.Components.Elements.length;
}

}, {
key: "options",
get: function get() {
return this._o;
}

,
set: function set(options) {
var created = this.State.is(CREATED);
if (!created) {
this.emit('update');
}
this._o = merge(this._o, options);
if (!created) {
this.emit('updated', this._o);
}
}

}, {
key: "classes",
get: function get() {
return this._o.classes;
}

}, {
key: "i18n",
get: function get() {
return this._o.i18n;
}
}]);
return Splide;
}();



 var options = (function (Splide) {

var options = getAttribute(Splide.root, 'data-splide');
if (options) {
try {
Splide.options = JSON.parse(options);
} catch (e) {
error(e.message);
}
}
return {

mount: function mount() {
if (Splide.State.is(CREATED)) {
Splide.index = Splide.options.start;
}
}
};
});



var LTR = 'ltr';

var RTL = 'rtl';

var TTB = 'ttb';



var STYLE_RESTORE_EVENTS = 'update.slide';

 var elements_slide = (function (Splide, index, realIndex, slide) {

var updateOnMove = Splide.options.updateOnMove;

var STATUS_UPDATE_EVENTS = 'ready.slide updated.slide resized.slide moved.slide' + (updateOnMove ? ' move.slide' : '');

var Slide = {

slide: slide,

index: index,

realIndex: realIndex,

container: child(slide, Splide.classes.container),

isClone: realIndex > -1,

mount: function mount() {
var _this = this;
if (!this.isClone) {
slide.id = Splide.root.id + "-slide" + pad(index + 1);
}
Splide.on(STATUS_UPDATE_EVENTS, function () {
return _this.update();
}).on(STYLE_RESTORE_EVENTS, restoreStyles).on('click', function () {
return Splide.emit('click', _this);
}, slide);

if (updateOnMove) {
Splide.on('move.slide', function (newIndex) {
if (newIndex === realIndex) {
_update(true, false);
}
});
}
applyStyle(slide, {
display: ''
});
this.styles = getAttribute(slide, 'style') || '';
},

destroy: function destroy() {
Splide.off(STATUS_UPDATE_EVENTS).off(STYLE_RESTORE_EVENTS).off('click', slide);
removeClass(slide, values(STATUS_CLASSES));
restoreStyles();
removeAttribute(this.container, 'style');
},

update: function update() {
_update(this.isActive(), false);
_update(this.isVisible(), true);
},

isActive: function isActive() {
return Splide.index === index;
},

isVisible: function isVisible() {
var active = this.isActive();
if (Splide.is(FADE) || active) {
return active;
}
var ceil = Math.ceil;
var trackRect = getRect(Splide.Components.Elements.track);
var slideRect = getRect(slide);
if (Splide.options.direction === TTB) {
return trackRect.top <= slideRect.top && slideRect.bottom <= ceil(trackRect.bottom);
}
return trackRect.left <= slideRect.left && slideRect.right <= ceil(trackRect.right);
},

isWithin: function isWithin(from, within) {
var diff = Math.abs(from - index);
if (!Splide.is(SLIDE) && !this.isClone) {
diff = Math.min(diff, Splide.length - diff);
}
return diff < within;
}
};

function _update(active, forVisibility) {
var type = forVisibility ? 'visible' : 'active';
var className = STATUS_CLASSES[type];
if (active) {
addClass(slide, className);
Splide.emit("" + type, Slide);
} else {
if (hasClass(slide, className)) {
removeClass(slide, className);
Splide.emit("" + (forVisibility ? 'hidden' : 'inactive'), Slide);
}
}
}

function restoreStyles() {
setAttribute(slide, 'style', Slide.styles);
}
return Slide;
});



var UID_NAME = 'uid';

 var components_elements = (function (Splide, Components) {

var root = Splide.root;

var classes = Splide.classes;

var Slides = [];

if (!root.id) {
window.splide = window.splide || {};
var uid = window.splide[UID_NAME] || 0;
window.splide[UID_NAME] = ++uid;
root.id = "splide" + pad(uid);
}

var Elements = {

mount: function mount() {
var _this = this;
this.init();
Splide.on('refresh', function () {
_this.destroy();
_this.init();
}).on('updated', function () {
removeClass(root, getClasses());
addClass(root, getClasses());
});
},

destroy: function destroy() {
Slides.forEach(function (Slide) {
Slide.destroy();
});
Slides = [];
removeClass(root, getClasses());
},

init: function init() {
var _this2 = this;
collect();
addClass(root, getClasses());
this.slides.forEach(function (slide, index) {
_this2.register(slide, index, -1);
});
},

register: function register(slide, index, realIndex) {
var SlideObject = elements_slide(Splide, index, realIndex, slide);
SlideObject.mount();
Slides.push(SlideObject);
},

getSlide: function getSlide(index) {
return Slides.filter(function (Slide) {
return Slide.index === index;
})[0];
},

getSlides: function getSlides(includeClones) {
return includeClones ? Slides : Slides.filter(function (Slide) {
return !Slide.isClone;
});
},

getSlidesByPage: function getSlidesByPage(page) {
var idx = Components.Controller.toIndex(page);
var options = Splide.options;
var max = options.focus !== false ? 1 : options.perPage;
return Slides.filter(function (_ref) {
var index = _ref.index;
return idx <= index && index < idx + max;
});
},

add: function add(slide, index, callback) {
if (typeof slide === 'string') {
slide = domify(slide);
}
if (slide instanceof Element) {
var ref = this.slides[index];
applyStyle(slide, {
display: 'none'
});
if (ref) {
before(slide, ref);
this.slides.splice(index, 0, slide);
} else {
append(this.list, slide);
this.slides.push(slide);
}
loaded(slide, function () {
callback && callback(slide);
});
}
},

remove: function remove(index) {
dom_remove(this.slides.splice(index, 1)[0]);
},

each: function each(callback) {
Slides.forEach(callback);
},

get length() {
return this.slides.length;
},

get total() {
return Slides.length;
}
};

function collect() {
Elements.slider = child(root, classes.slider);
Elements.track = find(root, "." + classes.track);
Elements.list = child(Elements.track, classes.list);
exist(Elements.track && Elements.list, 'Track or list was not found.');
Elements.slides = children(Elements.list, classes.slide);
var arrows = findParts(classes.arrows);
Elements.arrows = {
prev: find(arrows, "." + classes.prev),
next: find(arrows, "." + classes.next)
};
var autoplay = findParts(classes.autoplay);
Elements.bar = find(findParts(classes.progress), "." + classes.bar);
Elements.play = find(autoplay, "." + classes.play);
Elements.pause = find(autoplay, "." + classes.pause);
Elements.track.id = Elements.track.id || root.id + "-track";
Elements.list.id = Elements.list.id || root.id + "-list";
}

function getClasses() {
var rootClass = classes.root;
var options = Splide.options;
return [rootClass + "--" + options.type, rootClass + "--" + options.direction, options.drag ? rootClass + "--draggable" : '', options.isNavigation ? rootClass + "--nav" : '', STATUS_CLASSES.active];
}

function findParts(className) {
return child(root, className) || child(Elements.slider, className);
}
return Elements;
});


var floor = Math.floor;

 var controller = (function (Splide, Components) {

var options;

var isLoop;

var Controller = {

mount: function mount() {
options = Splide.options;
isLoop = Splide.is(LOOP);
bind();
},

go: function go(control, silently) {
var destIndex = this.trim(this.parse(control));
Components.Track.go(destIndex, this.rewind(destIndex), silently);
},

parse: function parse(control) {
var index = Splide.index;
var matches = String(control).match(/([+\-<>]+)(\d+)?/);
var indicator = matches ? matches[1] : '';
var number = matches ? parseInt(matches[2]) : 0;
switch (indicator) {
case '+':
index += number || 1;
break;
case '-':
index -= number || 1;
break;
case '>':
case '<':
index = parsePage(number, index, indicator === '<');
break;
default:
index = parseInt(control);
}
return index;
},

toIndex: function toIndex(page) {
if (hasFocus()) {
return page;
}
var length = Splide.length;
var perPage = options.perPage;
var index = page * perPage;
index = index - (this.pageLength * perPage - length) * floor(index / length);
if (length - perPage <= index && index < length) {
index = length - perPage;
}
return index;
},

toPage: function toPage(index) {
if (hasFocus()) {
return index;
}
var length = Splide.length;
var perPage = options.perPage;
if (length - perPage <= index && index < length) {
return floor((length - 1) / perPage);
}
return floor(index / perPage);
},

trim: function trim(index) {
if (!isLoop) {
index = options.rewind ? this.rewind(index) : between(index, 0, this.edgeIndex);
}
return index;
},

rewind: function rewind(index) {
var edge = this.edgeIndex;
if (isLoop) {
while (index > edge) {
index -= edge + 1;
}
while (index < 0) {
index += edge + 1;
}
} else {
if (index > edge) {
index = 0;
} else if (index < 0) {
index = edge;
}
}
return index;
},

isRtl: function isRtl() {
return options.direction === RTL;
},

get pageLength() {
var length = Splide.length;
return hasFocus() ? length : Math.ceil(length / options.perPage);
},

get edgeIndex() {
var length = Splide.length;
if (!length) {
return 0;
}
if (hasFocus() || options.isNavigation || isLoop) {
return length - 1;
}
return length - options.perPage;
},

get prevIndex() {
var prev = Splide.index - 1;
if (isLoop || options.rewind) {
prev = this.rewind(prev);
}
return prev > -1 ? prev : -1;
},

get nextIndex() {
var next = Splide.index + 1;
if (isLoop || options.rewind) {
next = this.rewind(next);
}
return Splide.index < next && next <= this.edgeIndex || next === 0 ? next : -1;
}
};

function bind() {
Splide.on('move', function (newIndex) {
Splide.index = newIndex;
}).on('updated refresh', function (newOptions) {
options = newOptions || options;
Splide.index = between(Splide.index, 0, Controller.edgeIndex);
});
}

function hasFocus() {
return options.focus !== false;
}

function parsePage(number, index, prev) {
if (number > -1) {
return Controller.toIndex(number);
}
var perMove = options.perMove;
var sign = prev ? -1 : 1;
if (perMove) {
return index + perMove * sign;
}
return Controller.toIndex(Controller.toPage(index) + sign);
}
return Controller;
});


var abs = Math.abs;

 var track = (function (Splide, Components) {

var Layout;

var Elements;

var list;

var isVertical = Splide.options.direction === TTB;

var isFade = Splide.is(FADE);

var isRTL = Splide.options.direction === RTL;

var isLoopPending = false;

var sign = isRTL ? 1 : -1;

var Track = {

sign: sign,

mount: function mount() {
Elements = Components.Elements;
Layout = Components.Layout;
list = Elements.list;
},

mounted: function mounted() {
var _this = this;
if (!isFade) {
this.jump(0);
Splide.on('mounted resize updated', function () {
_this.jump(Splide.index);
});
}
},

go: function go(destIndex, newIndex, silently) {
var newPosition = getTrimmedPosition(destIndex);
var prevIndex = Splide.index;
if (Splide.State.is(MOVING) && isLoopPending) {
return;
}
isLoopPending = destIndex !== newIndex;
if (!silently) {
Splide.emit('move', newIndex, prevIndex, destIndex);
}
if (Math.abs(newPosition - this.position) >= 1 || isFade) {
Components.Transition.start(destIndex, newIndex, prevIndex, this.toCoord(newPosition), function () {
onTransitionEnd(destIndex, newIndex, prevIndex, silently);
});
} else {
if (destIndex !== prevIndex && Splide.options.trimSpace === 'move') {
Components.Controller.go(destIndex + destIndex - prevIndex, silently);
} else {
onTransitionEnd(destIndex, newIndex, prevIndex, silently);
}
}
},

jump: function jump(index) {
this.translate(getTrimmedPosition(index));
},

translate: function translate(position) {
applyStyle(list, {
transform: "translate" + (isVertical ? 'Y' : 'X') + "(" + position + "px)"
});
},

cancel: function cancel() {
if (Splide.is(LOOP)) {
this.shift();
} else {
this.translate(this.position);
}
applyStyle(list, {
transition: ''
});
},

shift: function shift() {
var position = abs(this.position);
var left = abs(this.toPosition(0));
var right = abs(this.toPosition(Splide.length));
var innerSize = right - left;
if (position < left) {
position += innerSize;
} else if (position > right) {
position -= innerSize;
}
this.translate(sign * position);
},

trim: function trim(position) {
if (!Splide.options.trimSpace || Splide.is(LOOP)) {
return position;
}
var edge = sign * (Layout.totalSize() - Layout.size - Layout.gap);
return between(position, edge, 0);
},

toIndex: function toIndex(position) {
var _this2 = this;
var index = 0;
var minDistance = Infinity;
Elements.getSlides(true).forEach(function (Slide) {
var slideIndex = Slide.index;
var distance = abs(_this2.toPosition(slideIndex) - position);
if (distance < minDistance) {
minDistance = distance;
index = slideIndex;
}
});
return index;
},

toCoord: function toCoord(position) {
return {
x: isVertical ? 0 : position,
y: isVertical ? position : 0
};
},

toPosition: function toPosition(index) {
var position = Layout.totalSize(index) - Layout.slideSize(index) - Layout.gap;
return sign * (position + this.offset(index));
},

offset: function offset(index) {
var focus = Splide.options.focus;
var slideSize = Layout.slideSize(index);
if (focus === 'center') {
return -(Layout.size - slideSize) / 2;
}
return -(parseInt(focus) || 0) * (slideSize + Layout.gap);
},

get position() {
var prop = isVertical ? 'top' : isRTL ? 'right' : 'left';
return getRect(list)[prop] - (getRect(Elements.track)[prop] - Layout.padding[prop] * sign);
}
};

function onTransitionEnd(destIndex, newIndex, prevIndex, silently) {
applyStyle(list, {
transition: ''
});
isLoopPending = false;
if (!isFade) {
Track.jump(newIndex);
}
if (!silently) {
Splide.emit('moved', newIndex, prevIndex, destIndex);
}
}

function getTrimmedPosition(index) {
return Track.trim(Track.toPosition(index));
}
return Track;
});



 var clones = (function (Splide, Components) {

var clones = [];

var cloneCount = 0;

var Elements = Components.Elements;

var Clones = {

mount: function mount() {
var _this = this;
if (Splide.is(LOOP)) {
init();
Splide.on('refresh:before', function () {
_this.destroy();
}).on('refresh', init).on('resize', function () {
if (cloneCount !== getCloneCount()) {
_this.destroy();
Splide.refresh();
}
});
}
},

destroy: function destroy() {
dom_remove(clones);
clones = [];
},

get clones() {
return clones;
},

get length() {
return clones.length;
}
};

function init() {
Clones.destroy();
cloneCount = getCloneCount();
generateClones(cloneCount);
}

function generateClones(count) {
var length = Elements.length,
register = Elements.register;
if (length) {
var slides = Elements.slides;
while (slides.length < count) {
slides = slides.concat(slides);
}
slides.slice(0, count).forEach(function (elm, index) {
var clone = cloneDeeply(elm);
append(Elements.list, clone);
clones.push(clone);
register(clone, index + length, index % length);
});
slides.slice(-count).forEach(function (elm, index) {
var clone = cloneDeeply(elm);
before(clone, slides[0]);
clones.push(clone);
register(clone, index - count, (length + index - count % length) % length);
});
}
}

function getCloneCount() {
var options = Splide.options;
if (options.clones) {
return options.clones;
}
var baseCount = options.autoWidth || options.autoHeight ? Elements.length : options.perPage;
var dimension = options.direction === TTB ? 'Height' : 'Width';
var fixedSize = toPixel(Splide.root, options["fixed" + dimension]);
if (fixedSize) {
baseCount = Math.ceil(Elements.track["client" + dimension] / fixedSize);
}
return baseCount * (options.drag ? options.flickMaxPages + 1 : 1);
}

function cloneDeeply(elm) {
var clone = elm.cloneNode(true);
addClass(clone, Splide.classes.clone);
removeAttribute(clone, 'id');
return clone;
}
return Clones;
});



 var horizontal = (function (Splide, Components) {

var Elements = Components.Elements;

var root = Splide.root;

var track;

var options = Splide.options;
return {

margin: 'margin' + (options.direction === RTL ? 'Left' : 'Right'),

height: 0,

init: function init() {
this.resize();
},

resize: function resize() {
options = Splide.options;
track = Elements.track;
this.gap = toPixel(root, options.gap);
var padding = options.padding;
var left = toPixel(root, padding.left || padding);
var right = toPixel(root, padding.right || padding);
this.padding = {
left: left,
right: right
};
applyStyle(track, {
paddingLeft: unit(left),
paddingRight: unit(right)
});
},

totalWidth: function totalWidth(index) {
if (index === void 0) {
index = Splide.length - 1;
}
var Slide = Elements.getSlide(index);
var width = 0;
if (Slide) {
var slideRect = getRect(Slide.slide);
var listRect = getRect(Elements.list);
if (options.direction === RTL) {
width = listRect.right - slideRect.left;
} else {
width = slideRect.right - listRect.left;
}
width += this.gap;
}
return width;
},

slideWidth: function slideWidth(index) {
if (options.autoWidth) {
var Slide = Elements.getSlide(index);
return Slide ? Slide.slide.offsetWidth : 0;
}
var width = options.fixedWidth || (this.width + this.gap) / options.perPage - this.gap;
return toPixel(root, width);
},

slideHeight: function slideHeight() {
var height = options.height || options.fixedHeight || this.width * options.heightRatio;
return toPixel(root, height);
},

get width() {
return track.clientWidth - this.padding.left - this.padding.right;
}
};
});



 var vertical = (function (Splide, Components) {

var Elements = Components.Elements;

var root = Splide.root;

var track;

var options;
return {

margin: 'marginBottom',

init: function init() {
this.resize();
},

resize: function resize() {
options = Splide.options;
track = Elements.track;
this.gap = toPixel(root, options.gap);
var padding = options.padding;
var top = toPixel(root, padding.top || padding);
var bottom = toPixel(root, padding.bottom || padding);
this.padding = {
top: top,
bottom: bottom
};
applyStyle(track, {
paddingTop: unit(top),
paddingBottom: unit(bottom)
});
},

totalHeight: function totalHeight(index) {
if (index === void 0) {
index = Splide.length - 1;
}
var Slide = Elements.getSlide(index);
if (Slide) {
return getRect(Slide.slide).bottom - getRect(Elements.list).top + this.gap;
}
return 0;
},

slideWidth: function slideWidth() {
return toPixel(root, options.fixedWidth || this.width);
},

slideHeight: function slideHeight(index) {
if (options.autoHeight) {
var Slide = Elements.getSlide(index);
return Slide ? Slide.slide.offsetHeight : 0;
}
var height = options.fixedHeight || (this.height + this.gap) / options.perPage - this.gap;
return toPixel(root, height);
},

get width() {
return track.clientWidth;
},

get height() {
var height = options.height || this.width * options.heightRatio;
exist(height, '"height" or "heightRatio" is missing.');
return toPixel(root, height) - this.padding.top - this.padding.bottom;
}
};
});



function throttle(func, wait) {
var timeout;
return function () {
if (!timeout) {
timeout = setTimeout(function () {
func();
timeout = null;
}, wait);
}
};
}

function createInterval(callback, interval, progress) {
var _window = window,
requestAnimationFrame = _window.requestAnimationFrame;
var start,
elapse,
rate,
_pause = true;
var step = function step(timestamp) {
if (!_pause) {
if (!start) {
start = timestamp;
if (rate && rate < 1) {
start -= rate * interval;
}
}
elapse = timestamp - start;
rate = elapse / interval;
if (elapse >= interval) {
start = 0;
rate = 1;
callback();
}
if (progress) {
progress(rate);
}
requestAnimationFrame(step);
}
};
return {
pause: function pause() {
_pause = true;
start = 0;
},
play: function play(reset) {
start = 0;
if (reset) {
rate = 0;
}
if (_pause) {
_pause = false;
requestAnimationFrame(step);
}
}
};
}



 var layout = (function (Splide, Components) {

var Elements = Components.Elements;

var isVertical = Splide.options.direction === TTB;

var Layout = object_assign({

mount: function mount() {
bind();
init();
this.totalSize = isVertical ? this.totalHeight : this.totalWidth;
this.slideSize = isVertical ? this.slideHeight : this.slideWidth;
},

destroy: function destroy() {
removeAttribute([Elements.list, Elements.track], 'style');
},

get size() {
return isVertical ? this.height : this.width;
}
}, isVertical ? vertical(Splide, Components) : horizontal(Splide, Components));

function init() {
Layout.init();
applyStyle(Splide.root, {
maxWidth: unit(Splide.options.width)
});
Elements.each(function (Slide) {
Slide.slide.style[Layout.margin] = unit(Layout.gap);
});
resize();
}

function bind() {
Splide.on('resize load', throttle(function () {
Splide.emit('resize');
}, Splide.options.throttle), window).on('resize', resize).on('updated refresh', init);
}

function resize() {
var options = Splide.options;
Layout.resize();
applyStyle(Elements.track, {
height: unit(Layout.height)
});
var slideHeight = options.autoHeight ? null : unit(Layout.slideHeight());
Elements.each(function (Slide) {
applyStyle(Slide.container, {
height: slideHeight
});
applyStyle(Slide.slide, {
width: options.autoWidth ? null : unit(Layout.slideWidth(Slide.index)),
height: Slide.container ? null : slideHeight
});
});
Splide.emit('resized');
}
return Layout;
});


var drag_abs = Math.abs;

var MIN_VELOCITY = 0.1;

var FRICTION_REDUCER = 7;

 var drag = (function (Splide, Components) {

var Track = Components.Track;

var Controller = Components.Controller;

var startCoord;

var startInfo;

var currentInfo;

var isDragging;

var isVertical = Splide.options.direction === TTB;

var axis = isVertical ? 'y' : 'x';

var Drag = {

disabled: false,

mount: function mount() {
var _this = this;
var Elements = Components.Elements;
var track = Elements.track;
Splide.on('touchstart mousedown', start, track).on('touchmove mousemove', move, track, {
passive: false
}).on('touchend touchcancel mouseleave mouseup dragend', end, track).on('mounted refresh', function () {
each(Elements.list.querySelectorAll('img, a'), function (elm) {
Splide.off('dragstart', elm).on('dragstart', function (e) {
e.preventDefault();
}, elm, {
passive: false
});
});
}).on('mounted updated', function () {
_this.disabled = !Splide.options.drag;
});
}
};

function start(e) {
if (!Drag.disabled && !isDragging) {
init(e);
}
}

function init(e) {
startCoord = Track.toCoord(Track.position);
startInfo = analyze(e, {});
currentInfo = startInfo;
}

function move(e) {
if (startInfo) {
currentInfo = analyze(e, startInfo);
if (isDragging) {
if (e.cancelable) {
e.preventDefault();
}
if (!Splide.is(FADE)) {
var position = startCoord[axis] + currentInfo.offset[axis];
Track.translate(resist(position));
}
} else {
if (shouldMove(currentInfo)) {
Splide.emit('drag', startInfo);
isDragging = true;
Track.cancel();
init(e);
}
}
}
}

function shouldMove(_ref) {
var offset = _ref.offset;
if (Splide.State.is(MOVING) && Splide.options.waitForTransition) {
return false;
}
var angle = Math.atan(drag_abs(offset.y) / drag_abs(offset.x)) * 180 / Math.PI;
if (isVertical) {
angle = 90 - angle;
}
return angle < Splide.options.dragAngleThreshold;
}

function resist(position) {
if (Splide.is(SLIDE)) {
var sign = Track.sign;
var _start = sign * Track.trim(Track.toPosition(0));
var _end = sign * Track.trim(Track.toPosition(Controller.edgeIndex));
position *= sign;
if (position < _start) {
position = _start - FRICTION_REDUCER * Math.log(_start - position);
} else if (position > _end) {
position = _end + FRICTION_REDUCER * Math.log(position - _end);
}
position *= sign;
}
return position;
}

function end() {
startInfo = null;
if (isDragging) {
Splide.emit('dragged', currentInfo);
go(currentInfo);
isDragging = false;
}
}

function go(info) {
var velocity = info.velocity[axis];
var absV = drag_abs(velocity);
if (absV > 0) {
var options = Splide.options;
var index = Splide.index;
var sign = velocity < 0 ? -1 : 1;
var destIndex = index;
if (!Splide.is(FADE)) {
var destination = Track.position;
if (absV > options.flickVelocityThreshold && drag_abs(info.offset[axis]) < options.swipeDistanceThreshold) {
destination += sign * Math.min(absV * options.flickPower, Components.Layout.size * (options.flickMaxPages || 1));
}
destIndex = Track.toIndex(destination);
}

if (destIndex === index && absV > MIN_VELOCITY) {
destIndex = index + sign * Track.sign;
}
if (Splide.is(SLIDE)) {
destIndex = between(destIndex, 0, Controller.edgeIndex);
}
Controller.go(destIndex, options.isNavigation);
}
}

function analyze(e, startInfo) {
var timeStamp = e.timeStamp,
touches = e.touches;
var _ref2 = touches ? touches[0] : e,
clientX = _ref2.clientX,
clientY = _ref2.clientY;
var _ref3 = startInfo.to || {},
_ref3$x = _ref3.x,
fromX = _ref3$x === void 0 ? clientX : _ref3$x,
_ref3$y = _ref3.y,
fromY = _ref3$y === void 0 ? clientY : _ref3$y;
var startTime = startInfo.time || 0;
var offset = {
x: clientX - fromX,
y: clientY - fromY
};
var duration = timeStamp - startTime;
var velocity = {
x: offset.x / duration,
y: offset.y / duration
};
return {
to: {
x: clientX,
y: clientY
},
offset: offset,
time: timeStamp,
velocity: velocity
};
}
return Drag;
});



 var click = (function (Splide, Components) {

var disabled = false;

var Click = {

required: Splide.options.drag,

mount: function mount() {
Splide.on('click', onClick, Components.Elements.track, {
capture: true
}).on('drag', function () {
disabled = true;
}).on('dragged', function () {
setTimeout(function () {
disabled = false;
});
});
}
};

function onClick(e) {
if (disabled) {
e.preventDefault();
e.stopPropagation();
e.stopImmediatePropagation();
}
}
return Click;
});



var PAUSE_FLAGS = {
HOVER: 1,
FOCUS: 2,
MANUAL: 3
};

 var autoplay = (function (Splide, Components, name) {

var flags = [];

var interval;

var Elements = Components.Elements;

var Autoplay = {

required: Splide.options.autoplay,

mount: function mount() {
var options = Splide.options;
if (Elements.slides.length > options.perPage) {
interval = createInterval(function () {
Splide.go('>');
}, options.interval, function (rate) {
Splide.emit(name + ":playing", rate);
if (Elements.bar) {
applyStyle(Elements.bar, {
width: rate * 100 + "%"
});
}
});
bind();
this.play();
}
},

play: function play(flag) {
if (flag === void 0) {
flag = 0;
}
flags = flags.filter(function (f) {
return f !== flag;
});
if (!flags.length) {
Splide.emit(name + ":play");
interval.play(Splide.options.resetProgress);
}
},

pause: function pause(flag) {
if (flag === void 0) {
flag = 0;
}
interval.pause();
if (flags.indexOf(flag) === -1) {
flags.push(flag);
}
if (flags.length === 1) {
Splide.emit(name + ":pause");
}
}
};

function bind() {
var options = Splide.options;
var sibling = Splide.sibling;
var elms = [Splide.root, sibling ? sibling.root : null];
if (options.pauseOnHover) {
switchOn(elms, 'mouseleave', PAUSE_FLAGS.HOVER, true);
switchOn(elms, 'mouseenter', PAUSE_FLAGS.HOVER, false);
}
if (options.pauseOnFocus) {
switchOn(elms, 'focusout', PAUSE_FLAGS.FOCUS, true);
switchOn(elms, 'focusin', PAUSE_FLAGS.FOCUS, false);
}
if (Elements.play) {
Splide.on('click', function () {
Autoplay.play(PAUSE_FLAGS.FOCUS);
Autoplay.play(PAUSE_FLAGS.MANUAL);
}, Elements.play);
}
if (Elements.pause) {
switchOn([Elements.pause], 'click', PAUSE_FLAGS.MANUAL, false);
}
Splide.on('move refresh', function () {
Autoplay.play();
})
.on('destroy', function () {
Autoplay.pause();
});
}

function switchOn(elms, event, flag, play) {
elms.forEach(function (elm) {
Splide.on(event, function () {
Autoplay[play ? 'play' : 'pause'](flag);
}, elm);
});
}
return Autoplay;
});



 var cover = (function (Splide, Components) {

var options = Splide.options;

var Cover = {

required: options.cover,

mount: function mount() {
Splide.on('lazyload:loaded', function (img) {
cover(img, false);
});
Splide.on('mounted updated refresh', function () {
return apply(false);
});
},

destroy: function destroy() {
apply(true);
}
};

function apply(uncover) {
Components.Elements.each(function (Slide) {
var img = child(Slide.slide, 'IMG') || child(Slide.container, 'IMG');
if (img && img.src) {
cover(img, uncover);
}
});
}

function cover(img, uncover) {
applyStyle(img.parentElement, {
background: uncover ? '' : "center/cover no-repeat url(\"" + img.src + "\")"
});
applyStyle(img, {
display: uncover ? '' : 'none'
});
}
return Cover;
});



var XML_NAME_SPACE = 'http://www.w3.org/2000/svg';

var PATH = 'm15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z';

var SIZE = 40;



 var arrows = (function (Splide, Components, name) {

var prev;

var next;

var classes = Splide.classes;

var root = Splide.root;

var created;

var Elements = Components.Elements;

var Arrows = {

required: Splide.options.arrows,

mount: function mount() {
prev = Elements.arrows.prev;
next = Elements.arrows.next;
if ((!prev || !next) && Splide.options.arrows) {
prev = createArrow(true);
next = createArrow(false);
created = true;
appendArrows();
}
if (prev && next) {
bind();
}
this.arrows = {
prev: prev,
next: next
};
},

mounted: function mounted() {
Splide.emit(name + ":mounted", prev, next);
},

destroy: function destroy() {
removeAttribute([prev, next], 'disabled');
if (created) {
dom_remove(prev.parentElement);
}
}
};

function bind() {
Splide.on('click', function () {
Splide.go('<');
}, prev).on('click', function () {
Splide.go('>');
}, next).on('mounted move updated refresh', updateDisabled);
}

function updateDisabled() {
var _Components$Controlle = Components.Controller,
prevIndex = _Components$Controlle.prevIndex,
nextIndex = _Components$Controlle.nextIndex;
var isEnough = Splide.length > Splide.options.perPage || Splide.is(LOOP);
prev.disabled = prevIndex < 0 || !isEnough;
next.disabled = nextIndex < 0 || !isEnough;
Splide.emit(name + ":updated", prev, next, prevIndex, nextIndex);
}

function appendArrows() {
var wrapper = create('div', {
"class": classes.arrows
});
append(wrapper, prev);
append(wrapper, next);
var slider = Elements.slider;
var parent = Splide.options.arrows === 'slider' && slider ? slider : root;
before(wrapper, parent.firstElementChild);
}

function createArrow(prev) {
var arrow = "<button class=\"" + classes.arrow + " " + (prev ? classes.prev : classes.next) + "\" type=\"button\">" + ("<svg xmlns=\"" + XML_NAME_SPACE + "\"\tviewBox=\"0 0 " + SIZE + " " + SIZE + "\"\twidth=\"" + SIZE + "\"\theight=\"" + SIZE + "\">") + ("<path d=\"" + (Splide.options.arrowPath || PATH) + "\" />");
return domify(arrow);
}
return Arrows;
});



var ATTRIBUTES_UPDATE_EVENT = 'move.page';

var UPDATE_EVENT = 'updated.page refresh.page';

 var pagination = (function (Splide, Components, name) {

var data = {};

var Elements = Components.Elements;

var Pagination = {

mount: function mount() {
var pagination = Splide.options.pagination;
if (pagination) {
data = createPagination();
var slider = Elements.slider;
var parent = pagination === 'slider' && slider ? slider : Splide.root;
append(parent, data.list);
Splide.on(ATTRIBUTES_UPDATE_EVENT, updateAttributes);
}
Splide.off(UPDATE_EVENT).on(UPDATE_EVENT, function () {
Pagination.destroy();
if (Splide.options.pagination) {
Pagination.mount();
Pagination.mounted();
}
});
},

mounted: function mounted() {
if (Splide.options.pagination) {
var index = Splide.index;
Splide.emit(name + ":mounted", data, this.getItem(index));
updateAttributes(index, -1);
}
},

destroy: function destroy() {
dom_remove(data.list);
if (data.items) {
data.items.forEach(function (item) {
Splide.off('click', item.button);
});
}
Splide.off(ATTRIBUTES_UPDATE_EVENT);
data = {};
},

getItem: function getItem(index) {
return data.items[Components.Controller.toPage(index)];
},

get data() {
return data;
}
};

function updateAttributes(index, prevIndex) {
var prev = Pagination.getItem(prevIndex);
var curr = Pagination.getItem(index);
var active = STATUS_CLASSES.active;
if (prev) {
removeClass(prev.button, active);
}
if (curr) {
addClass(curr.button, active);
}
Splide.emit(name + ":updated", data, prev, curr);
}

function createPagination() {
var options = Splide.options;
var classes = Splide.classes;
var list = create('ul', {
"class": classes.pagination
});
var items = Elements.getSlides(false).filter(function (Slide) {
return options.focus !== false || Slide.index % options.perPage === 0;
}).map(function (Slide, page) {
var li = create('li', {});
var button = create('button', {
"class": classes.page,
type: 'button'
});
append(li, button);
append(list, li);
Splide.on('click', function () {
Splide.go(">" + page);
}, button);
return {
li: li,
button: button,
page: page,
Slides: Elements.getSlidesByPage(page)
};
});
return {
list: list,
items: items
};
}
return Pagination;
});



var SRC_DATA_NAME = 'data-splide-lazy';

var SRCSET_DATA_NAME = 'data-splide-lazy-srcset';

 var lazyload = (function (Splide, Components, name) {

var nextIndex;

var images;

var options = Splide.options;

var isSequential = options.lazyLoad === 'sequential';

var Lazyload = {

required: options.lazyLoad,

mount: function mount() {
Splide.on('mounted refresh', function () {
init();
Components.Elements.each(function (Slide) {
each(Slide.slide.querySelectorAll("[" + SRC_DATA_NAME + "], [" + SRCSET_DATA_NAME + "]"), function (img) {
if (!img.src && !img.srcset) {
images.push({
img: img,
Slide: Slide
});
applyStyle(img, {
display: 'none'
});
}
});
});
if (isSequential) {
loadNext();
}
});
if (!isSequential) {
Splide.on("mounted refresh moved." + name, check);
}
},

destroy: init
};

function init() {
images = [];
nextIndex = 0;
}

function check(index) {
index = isNaN(index) ? Splide.index : index;
images = images.filter(function (image) {
if (image.Slide.isWithin(index, options.perPage * (options.preloadPages + 1))) {
load(image.img, image.Slide);
return false;
}
return true;
});
if (!images[0]) {
Splide.off("moved." + name);
}
}

function load(img, Slide) {
addClass(Slide.slide, STATUS_CLASSES.loading);
var spinner = create('span', {
"class": Splide.classes.spinner
});
append(img.parentElement, spinner);
img.onload = function () {
loaded(img, spinner, Slide, false);
};
img.onerror = function () {
loaded(img, spinner, Slide, true);
};
setAttribute(img, 'srcset', getAttribute(img, SRCSET_DATA_NAME) || '');
setAttribute(img, 'src', getAttribute(img, SRC_DATA_NAME) || '');
}

function loadNext() {
if (nextIndex < images.length) {
var image = images[nextIndex];
load(image.img, image.Slide);
}
nextIndex++;
}

function loaded(img, spinner, Slide, error) {
removeClass(Slide.slide, STATUS_CLASSES.loading);
if (!error) {
dom_remove(spinner);
applyStyle(img, {
display: ''
});
Splide.emit(name + ":loaded", img).emit('resize');
}
if (isSequential) {
loadNext();
}
}
return Lazyload;
});



var ARIA_CURRENRT = 'aria-current';

var ARIA_CONTROLS = 'aria-controls';

var ARIA_LABEL = 'aria-label';

var ARIA_LABELLEDBY = 'aria-labelledby';

var ARIA_HIDDEN = 'aria-hidden';

var TAB_INDEX = 'tabindex';



var KEY_MAP = {
ltr: {
ArrowLeft: '<',
ArrowRight: '>',
Left: '<',
Right: '>'
},
rtl: {
ArrowLeft: '>',
ArrowRight: '<',
Left: '>',
Right: '<'
},
ttb: {
ArrowUp: '<',
ArrowDown: '>',
Up: '<',
Down: '>'
}
};

 var keyboard = (function (Splide) {

var target;
return {

mount: function mount() {
Splide.on('mounted updated', function () {
var options = Splide.options;
var root = Splide.root;
var map = KEY_MAP[options.direction];
var keyboard = options.keyboard;
if (target) {
Splide.off('keydown', target);
removeAttribute(root, TAB_INDEX);
}
if (keyboard) {
if (keyboard === 'focused') {
target = root;
setAttribute(root, TAB_INDEX, 0);
} else {
target = document;
}
Splide.on('keydown', function (e) {
if (map[e.key]) {
Splide.go(map[e.key]);
}
}, target);
}
});
}
};
});



 var a11y = (function (Splide, Components) {

var i18n = Splide.i18n;

var Elements = Components.Elements;

var allAttributes = [ARIA_HIDDEN, TAB_INDEX, ARIA_CONTROLS, ARIA_LABEL, ARIA_CURRENRT, 'role'];

var A11y = {

required: Splide.options.accessibility,

mount: function mount() {
Splide.on('visible', function (Slide) {
updateSlide(Slide.slide, true);
}).on('hidden', function (Slide) {
updateSlide(Slide.slide, false);
}).on('arrows:mounted', initArrows).on('arrows:updated', updateArrows).on('pagination:mounted', initPagination).on('pagination:updated', updatePagination).on('refresh', function () {
removeAttribute(Components.Clones.clones, allAttributes);
});
if (Splide.options.isNavigation) {
Splide.on('navigation:mounted navigation:updated', initNavigation).on('active', function (Slide) {
updateNavigation(Slide, true);
}).on('inactive', function (Slide) {
updateNavigation(Slide, false);
});
}
initAutoplay();
},

destroy: function destroy() {
var Arrows = Components.Arrows;
var arrows = Arrows ? Arrows.arrows : {};
removeAttribute(Elements.slides.concat([arrows.prev, arrows.next, Elements.play, Elements.pause]), allAttributes);
}
};

function updateSlide(slide, visible) {
setAttribute(slide, ARIA_HIDDEN, !visible);
if (Splide.options.slideFocus) {
setAttribute(slide, TAB_INDEX, visible ? 0 : -1);
}
}

function initArrows(prev, next) {
var controls = Elements.track.id;
setAttribute(prev, ARIA_CONTROLS, controls);
setAttribute(next, ARIA_CONTROLS, controls);
}

function updateArrows(prev, next, prevIndex, nextIndex) {
var index = Splide.index;
var prevLabel = prevIndex > -1 && index < prevIndex ? i18n.last : i18n.prev;
var nextLabel = nextIndex > -1 && index > nextIndex ? i18n.first : i18n.next;
setAttribute(prev, ARIA_LABEL, prevLabel);
setAttribute(next, ARIA_LABEL, nextLabel);
}

function initPagination(data, activeItem) {
if (activeItem) {
setAttribute(activeItem.button, ARIA_CURRENRT, true);
}
data.items.forEach(function (item) {
var options = Splide.options;
var text = options.focus === false && options.perPage > 1 ? i18n.pageX : i18n.slideX;
var label = sprintf(text, item.page + 1);
var button = item.button;
var controls = item.Slides.map(function (Slide) {
return Slide.slide.id;
});
setAttribute(button, ARIA_CONTROLS, controls.join(' '));
setAttribute(button, ARIA_LABEL, label);
});
}

function updatePagination(data, prev, curr) {
if (prev) {
removeAttribute(prev.button, ARIA_CURRENRT);
}
if (curr) {
setAttribute(curr.button, ARIA_CURRENRT, true);
}
}

function initAutoplay() {
['play', 'pause'].forEach(function (name) {
var elm = Elements[name];
if (elm) {
if (!isButton(elm)) {
setAttribute(elm, 'role', 'button');
}
setAttribute(elm, ARIA_CONTROLS, Elements.track.id);
setAttribute(elm, ARIA_LABEL, i18n[name]);
}
});
}

function initNavigation(main) {
Elements.each(function (Slide) {
var slide = Slide.slide;
var realIndex = Slide.realIndex;
if (!isButton(slide)) {
setAttribute(slide, 'role', 'button');
}
var slideIndex = realIndex > -1 ? realIndex : Slide.index;
var label = sprintf(i18n.slideX, slideIndex + 1);
var mainSlide = main.Components.Elements.getSlide(slideIndex);
setAttribute(slide, ARIA_LABEL, label);
if (mainSlide) {
setAttribute(slide, ARIA_CONTROLS, mainSlide.slide.id);
}
});
}

function updateNavigation(_ref, active) {
var slide = _ref.slide;
if (active) {
setAttribute(slide, ARIA_CURRENRT, true);
} else {
removeAttribute(slide, ARIA_CURRENRT);
}
}

function isButton(elm) {
return elm.tagName === 'BUTTON';
}
return A11y;
});



var SYNC_EVENT = 'move.sync';

var CLICK_EVENTS = 'mouseup touchend';

var TRIGGER_KEYS = [' ', 'Enter', 'Spacebar'];

 var sync = (function (Splide) {

var sibling = Splide.sibling;

var isNavigation = sibling && sibling.options.isNavigation;

var Sync = {

required: !!sibling,

mount: function mount() {
syncMain();
syncSibling();
if (isNavigation) {
bind();
Splide.on('refresh', function () {
setTimeout(function () {
bind();
sibling.emit('navigation:updated', Splide);
});
});
}
},

mounted: function mounted() {
if (isNavigation) {
sibling.emit('navigation:mounted', Splide);
}
}
};

function syncMain() {
Splide.on(SYNC_EVENT, function (newIndex, prevIndex, destIndex) {
sibling.off(SYNC_EVENT).go(sibling.is(LOOP) ? destIndex : newIndex, false);
syncSibling();
});
}

function syncSibling() {
sibling.on(SYNC_EVENT, function (newIndex, prevIndex, destIndex) {
Splide.off(SYNC_EVENT).go(Splide.is(LOOP) ? destIndex : newIndex, false);
syncMain();
});
}

function bind() {
sibling.Components.Elements.each(function (_ref) {
var slide = _ref.slide,
index = _ref.index;

Splide.off(CLICK_EVENTS, slide).on(CLICK_EVENTS, function (e) {
if (!e.button || e.button === 0) {
moveSibling(index);
}
}, slide);

Splide.off('keyup', slide).on('keyup', function (e) {
if (TRIGGER_KEYS.indexOf(e.key) > -1) {
e.preventDefault();
moveSibling(index);
}
}, slide, {
passive: false
});
});
}

function moveSibling(index) {
if (Splide.State.is(IDLE)) {
sibling.go(index);
}
}
return Sync;
});



var THROTTLE = 50;

 var breakpoints = (function (Splide) {

var breakpoints = Splide.options.breakpoints;

var throttledCheck = throttle(check, THROTTLE);

var initialOptions;

var map = [];

var prevPoint;

var Breakpoints = {

required: breakpoints && matchMedia,

mount: function mount() {
map = Object.keys(breakpoints).sort(function (n, m) {
return +n - +m;
}).map(function (point) {
return {
point: point,
mql: matchMedia("(max-width:" + point + "px)")
};
});

this.destroy(true);
addEventListener('resize', throttledCheck);
initialOptions = Splide.options;
check();
},

destroy: function destroy(completely) {
if (completely) {
removeEventListener('resize', throttledCheck);
}
}
};

function check() {
var point = getPoint();
if (point !== prevPoint) {
prevPoint = point;
var State = Splide.State;
var options = breakpoints[point] || initialOptions;
var destroy = options.destroy;
if (destroy) {
Splide.options = initialOptions;
Splide.destroy(destroy === 'completely');
} else {
if (State.is(DESTROYED)) {
Splide.mount();
}
Splide.options = options;
}
}
}

function getPoint() {
var item = map.filter(function (item) {
return item.mql.matches;
})[0];
return item ? item.point : -1;
}
return Breakpoints;
});


var COMPLETE = {
Options: options,
Breakpoints: breakpoints,
Controller: controller,
Elements: components_elements,
Track: track,
Clones: clones,
Layout: layout,
Drag: drag,
Click: click,
Autoplay: autoplay,
Cover: cover,
Arrows: arrows,
Pagination: pagination,
LazyLoad: lazyload,
Keyboard: keyboard,
Sync: sync,
A11y: a11y
};
var LIGHT = {
Options: options,
Controller: controller,
Elements: components_elements,
Track: track,
Clones: clones,
Layout: layout,
Drag: drag,
Click: click,
Arrows: arrows,
Pagination: pagination,
A11y: a11y
};

function _inheritsLoose(subClass, superClass) { subClass.prototype = Object.create(superClass.prototype); subClass.prototype.constructor = subClass; subClass.__proto__ = superClass; }


var complete_Splide = function (_Core) {
_inheritsLoose(Splide, _Core);
function Splide(root, options) {
return _Core.call(this, root, options, COMPLETE) || this;
}
return Splide;
}(Splide);
window.Splide = complete_Splide;
 })()
;