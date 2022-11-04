
import sapp from "@randajan/simple-app";

import { sassPlugin } from 'esbuild-sass-plugin';
import svgrPlugin from 'esbuild-plugin-svgr';
import importGlobPlugin from 'esbuild-plugin-import-glob';

sapp(
    false,                           //false = start dev server; true = generate minify build and start prod server
    {   
        be:{
            plugins:[importGlobPlugin.default()]
        },
        fe:{
            loader:{
                ".js":"jsx",
                '.png': 'file',
                ".jpg": "file",
                ".gif": "file",
                ".eot": "file",
                ".woff": "file",
                ".ttf": "file"
            },
            plugins:[importGlobPlugin.default(), sassPlugin(), svgrPlugin()]
        }
    }
  )