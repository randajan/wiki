import * as list from "./../icons/*.svg";

const index = Object.fromEntries(list.filenames.map((t, i)=>[t.split("/").reverse()[0].split(".")[0], list.default[i].default]));


export default index;