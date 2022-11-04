
import be, { express, app, http, io, listener, fe, info } from "@randajan/simple-app/be";

app.use("/", express.static(info.dir.fe));
