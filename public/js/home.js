var M = () => {
    let t = () => {
        let e = document.location.href,
            s = document.querySelector("body"),
            r = new MutationObserver(() => {
                e !== document.location.href &&
                ((e = document.location.href),
                window.top &&
                (window.top.postMessage(
                    {
                        type: "URL_CHANGED",
                        url: document.location.href,
                    },
                    "https://lovable.dev"
                ),
                    window.top.postMessage(
                        {
                            type: "URL_CHANGED",
                            url: document.location.href,
                        },
                        "http://localhost:3000"
                    )));
            });
        s && r.observe(s, { childList: !0, subtree: !0 });
    };
    window.addEventListener("load", t);
};
var c = {
        HIGHLIGHT_COLOR: "#0da2e7",
        HIGHLIGHT_BG: "#0da2e71a",
        ALLOWED_ORIGINS: [
            "https://gptengineer.app",
            "http://localhost:3000",
            "https://lovable.dev",
        ],
        DEBOUNCE_DELAY: 10,
        Z_INDEX: 1e4,
        TOOLTIP_OFFSET: 25,
        MAX_TOOLTIP_WIDTH: 200,
        SCROLL_DEBOUNCE: 420,
        FULL_WIDTH_TOOLTIP_OFFSET: "12px",
        HIGHLIGHT_STYLE: {
            FULL_WIDTH: { OFFSET: "-5px", STYLE: "solid" },
            NORMAL: { OFFSET: "0", STYLE: "solid" },
        },
        SELECTED_ATTR: "data-lov-selected",
        HOVERED_ATTR: "data-lov-hovered",
        OVERRIDE_STYLESHEET_ID: "lovable-override",
    },
    f = (t) => {
        c.ALLOWED_ORIGINS.forEach((e) => {
            try {
                if (!window.parent) return;
                if (!t || typeof t != "object") {
                    console.error("Invalid message format");
                    return;
                }
                window.parent.postMessage(t, e);
            } catch (s) {
                console.error(`Failed to send message to ${e}:`, s);
            }
        });
    },
    Y = () =>
        new Promise((t) => {
            if (document.readyState !== "loading") {
                t();
                return;
            }
            requestIdleCallback(() => {
                t();
            });
        }),
    H = async () => {
        await Y();
        let t = import.meta.hot;
        return (
            t &&
            (await new Promise((e) => {
                let s = () => {
                    if (!t.data.pending) {
                        e();
                        return;
                    }
                    setTimeout(s, 50);
                };
                s();
            })),
            window.__REACT_SUSPENSE_DONE &&
            (await window.__REACT_SUSPENSE_DONE),
                !0
        );
    },
    C = () =>
        new Promise((t) => {
            let e = document.getElementById("root");
            if (e && e.children.length > 0) {
                t();
                return;
            }
            new MutationObserver((r, o) => {
                let d = document.getElementById("root");
                d && d.children.length > 0 && (o.disconnect(), t());
            }).observe(document.body, { childList: !0, subtree: !0 });
        });
var z = () => {
        let t = window.fetch;
        window.fetch = async function (...e) {
            let s = Date.now();
            try {
                let r;
                if (e?.[1]?.body)
                    try {
                        typeof e[1].body == "string"
                            ? (r = e[1].body)
                            : e[1].body instanceof FormData
                                ? (r =
                                    "FormData: " +
                                    Array.from(e[1].body.entries())
                                        .map(([d, a]) => `${d}=${a}`)
                                        .join("&"))
                                : e[1].body instanceof URLSearchParams
                                    ? (r = e[1].body.toString())
                                    : (r = JSON.stringify(e[1].body));
                    } catch {
                        r = "Could not serialize request body";
                    }
                let o = await t(...e);
                return (
                    f({
                        type: "NETWORK_REQUEST",
                        request: {
                            url: e?.[0] || o.url,
                            method: e?.[1]?.method || "GET",
                            status: o.status,
                            statusText: o.statusText,
                            responseBody: o?.clone?.()
                                ? await o.clone().text()
                                : void 0,
                            requestBody: r,
                            timestamp: new Date().toISOString(),
                            duration: Date.now() - s,
                            origin: window.location.origin,
                            headers: e?.[1]?.headers
                                ? Object.fromEntries(
                                    new Headers(e?.[1]?.headers)
                                )
                                : {},
                        },
                    }),
                        o
                );
            } catch (r) {
                let o;
                if (e?.[1]?.body)
                    try {
                        typeof e[1].body == "string"
                            ? (o = e[1].body)
                            : e[1].body instanceof FormData
                                ? (o =
                                    "FormData: " +
                                    Array.from(e[1].body.entries())
                                        .map(([T, i]) => `${T}=${i}`)
                                        .join("&"))
                                : e[1].body instanceof URLSearchParams
                                    ? (o = e[1].body.toString())
                                    : (o = JSON.stringify(e[1].body));
                    } catch {
                        o = "Could not serialize request body";
                    }
                let d = {
                        url: e?.[0],
                        method: e?.[1]?.method || "GET",
                        origin: window.location.origin,
                        timestamp: new Date().toISOString(),
                        duration: Date.now() - s,
                        headers: e?.[1]?.headers
                            ? Object.fromEntries(new Headers(e?.[1]?.headers))
                            : {},
                        requestBody: o,
                    },
                    a =
                        r instanceof TypeError
                            ? {
                                ...d,
                                error: {
                                    message: r?.message || "Unknown error",
                                    stack: r?.stack,
                                },
                            }
                            : {
                                ...d,
                                error: {
                                    message:
                                        r &&
                                        typeof r == "object" &&
                                        "message" in r &&
                                        typeof r.message == "string"
                                            ? r.message
                                            : "Unknown fetch error",
                                    stack:
                                        r &&
                                        typeof r == "object" &&
                                        "stack" in r &&
                                        typeof r.stack == "string"
                                            ? r.stack
                                            : "Not available",
                                },
                            };
                throw (f({ type: "NETWORK_REQUEST", request: a }), r);
            }
        };
    },
    X = () => {
        let t = document.querySelector("div#root");
        return t ? t.childElementCount === 0 : !1;
    },
    P = (() => {
        let t = !1,
            e = ({
                     message: s,
                     lineno: r,
                     colno: o,
                     filename: d,
                     error: a,
                 }) => ({
                message: s,
                lineno: r,
                colno: o,
                filename: d,
                stack: a?.stack,
            });
        return () => {
            if (t) return;
            let s = new Set(),
                r = (a) => {
                    let { lineno: T, colno: i, filename: E, message: b } = a;
                    return `${b}|${E}|${T}|${i}`;
                };
            z();
            let o = (a) =>
                    s.has(a)
                        ? !0
                        : (s.add(a), setTimeout(() => s.delete(a), 5e3), !1),
                d = (a) => {
                    let T = r(a);
                    if (o(T)) return;
                    let i = e(a);
                    f({
                        type: "RUNTIME_ERROR",
                        error: { ...i, blankScreen: X() },
                    });
                };
            window.addEventListener("error", d),
                window.addEventListener("unhandledrejection", (a) => {
                    if (!a.reason?.stack) return;
                    let T =
                        a.reason?.stack ||
                        a.reason?.message ||
                        String(a.reason);
                    if (o(T)) return;
                    let i = {
                        message:
                            a.reason?.message || "Unhandled promise rejection",
                        stack: a.reason?.stack || String(a.reason),
                    };
                    f({ type: "UNHANDLED_PROMISE_REJECTION", error: i });
                }),
                (t = !0);
        };
    })();
var I = class {
        constructor(e) {
            this.message = `[Circular Reference to ${e}]`;
        }
    },
    y = class {
        constructor(e, s) {
            (this._type = e), (this.value = s);
        }
    },
    J = {
        maxDepth: 10,
        indent: 2,
        includeSymbols: !0,
        preserveTypes: !0,
        maxStringLength: 1e4,
        maxArrayLength: 100,
        maxObjectKeys: 100,
    };
function A(t, e = {}, s = new WeakMap(), r = "root") {
    let o = { ...J, ...e };
    if (r.split(".").length > o.maxDepth)
        return new y("MaxDepthReached", `[Max depth of ${o.maxDepth} reached]`);
    if (t === void 0) return new y("undefined", "undefined");
    if (t === null) return null;
    if (typeof t == "string")
        return t.length > o.maxStringLength
            ? new y(
                "String",
                `${t.slice(0, o.maxStringLength)}... [${
                    t.length - o.maxStringLength
                } more characters]`
            )
            : t;
    if (typeof t == "number")
        return Number.isNaN(t)
            ? new y("Number", "NaN")
            : Number.isFinite(t)
                ? t
                : new y("Number", t > 0 ? "Infinity" : "-Infinity");
    if (typeof t == "boolean") return t;
    if (typeof t == "bigint") return new y("BigInt", t.toString());
    if (typeof t == "symbol") return new y("Symbol", t.toString());
    if (typeof t == "function")
        return new y("Function", {
            name: t.name || "anonymous",
            stringValue: t.toString().slice(0, o.maxStringLength),
        });
    if (t && typeof t == "object") {
        if (s.has(t)) return new I(s.get(t));
        s.set(t, r);
    }
    if (t instanceof Error) {
        let i = { name: t.name, message: t.message, stack: t.stack };
        for (let E of Object.getOwnPropertyNames(t))
            i[E] || (i[E] = A(t[E], o, s, `${r}.${E}`));
        return new y("Error", i);
    }
    if (t instanceof Date)
        return new y("Date", {
            iso: t.toISOString(),
            value: t.valueOf(),
            local: t.toString(),
        });
    if (t instanceof RegExp)
        return new y("RegExp", {
            source: t.source,
            flags: t.flags,
            string: t.toString(),
        });
    if (t instanceof Promise) return new y("Promise", "[Promise]");
    if (t instanceof WeakMap || t instanceof WeakSet)
        return new y(t.constructor.name, "[" + t.constructor.name + "]");
    if (t instanceof Set) {
        let i = Array.from(t);
        return i.length > o.maxArrayLength
            ? new y("Set", {
                values: i
                    .slice(0, o.maxArrayLength)
                    .map((E, b) => A(E, o, s, `${r}.Set[${b}]`)),
                truncated: i.length - o.maxArrayLength,
            })
            : new y("Set", {
                values: i.map((E, b) => A(E, o, s, `${r}.Set[${b}]`)),
            });
    }
    if (t instanceof Map) {
        let i = {},
            E = 0,
            b = 0;
        for (let [O, D] of t.entries()) {
            if (b >= o.maxObjectKeys) {
                E++;
                continue;
            }
            let S =
                typeof O == "object"
                    ? JSON.stringify(A(O, o, s, `${r}.MapKey`))
                    : String(O);
            (i[S] = A(D, o, s, `${r}.Map[${S}]`)), b++;
        }
        return new y("Map", { entries: i, truncated: E || void 0 });
    }
    if (ArrayBuffer.isView(t)) {
        let i = t;
        return new y(t.constructor.name, {
            length: i.length,
            byteLength: i.byteLength,
            sample: Array.from(i.slice(0, 10)),
        });
    }
    if (Array.isArray(t))
        return t.length > o.maxArrayLength
            ? t
                .slice(0, o.maxArrayLength)
                .map((i, E) => A(i, o, s, `${r}[${E}]`))
                .concat([`... ${t.length - o.maxArrayLength} more items`])
            : t.map((i, E) => A(i, o, s, `${r}[${E}]`));
    let d = {},
        a = [...Object.getOwnPropertyNames(t)];
    o.includeSymbols &&
    a.push(...Object.getOwnPropertySymbols(t).map((i) => i.toString()));
    let T = 0;
    return (
        a.slice(0, o.maxObjectKeys).forEach((i) => {
            try {
                let E = t[i];
                d[i] = A(E, o, s, `${r}.${i}`);
            } catch (E) {
                d[i] = new y("Error", `[Unable to serialize: ${E.message}]`);
            }
        }),
        a.length > o.maxObjectKeys &&
        ((T = a.length - o.maxObjectKeys),
            (d["..."] = `${T} more properties`)),
            d
    );
}
var Q = { log: console.log, warn: console.warn, error: console.error },
    Z = { log: "info", warn: "warning", error: "error" },
    k = (() => {
        let t = !1;
        return () => {
            if (t) return;
            let e = (s) => {
                console[s] = (...r) => {
                    Q[s].apply(console, r);
                    let o = null;
                    if (s === "warn" || s === "error") {
                        let a = new Error();
                        a.stack &&
                        (o = a.stack
                            .split(
                                `
`
                            )
                            .slice(2).join(`
`));
                    }
                    let d = r.map((a) =>
                        A(a, {
                            maxDepth: 5,
                            includeSymbols: !0,
                            preserveTypes: !0,
                        })
                    );
                    f({
                        type: "CONSOLE_OUTPUT",
                        level: Z[s],
                        message:
                            d
                                .map((a) =>
                                    typeof a == "string"
                                        ? a
                                        : JSON.stringify(a, null, 2)
                                )
                                .join(" ") +
                            (o
                                ? `
` + o
                                : ""),
                        logged_at: new Date().toISOString(),
                        raw: d,
                    });
                };
            };
            e("log"), e("warn"), e("error"), (t = !0);
        };
    })();
var ee = (t) => {
        let e = (s) => {
            let o = {
                type: "node",
                children: [],
                attrs: [...s.attributes].reduce(
                    (d, a) => ((d[a.name] = a.value), d),
                    {}
                ),
                tagName: s.tagName,
                data: R(s),
            };
            return (
                [...s.childNodes].forEach((d) => {
                    d instanceof HTMLElement
                        ? o.children.push(e(d))
                        : d instanceof Text &&
                        o.children.push({
                            type: "text",
                            textContent: d.textContent || "",
                        });
                }),
                    o
            );
        };
        return e(t);
    },
    $ = async () => {
        await H();
        let t = ee(document.querySelector("#root"));
        f({ type: "COMPONENT_TREE", payload: { tree: t } });
    };
var F = () => {
    window.addEventListener(
        "keydown",
        (t) => {
            let e = [];
            t.metaKey && e.push("Meta"),
            t.ctrlKey && e.push("Ctrl"),
            t.altKey && e.push("Alt"),
            t.shiftKey && e.push("Shift");
            let s =
                    t.key !== "Meta" &&
                    t.key !== "Control" &&
                    t.key !== "Alt" &&
                    t.key !== "Shift"
                        ? t.key
                        : "",
                r = [...e, s].filter(Boolean).join("+");
            ["Meta+z", "Meta+Backspace", "Meta+d"].includes(r) &&
            t.preventDefault(),
            r &&
            f({
                type: "KEYBIND",
                payload: {
                    compositeKey: r,
                    rawEvent: {
                        key: t.key,
                        code: t.code,
                        metaKey: t.metaKey,
                        ctrlKey: t.ctrlKey,
                        altKey: t.altKey,
                        shiftKey: t.shiftKey,
                    },
                    timestamp: Date.now(),
                },
            });
        },
        { passive: !0 }
    );
};
window.LOV_SELECTOR_SCRIPT_VERSION = "1.0.5";
var _ = (t) =>
        t.hasAttribute("data-lov-id") || t.hasAttribute("data-component-path"),
    U = (t) => {
        if (!t) return {};
        let [e, s, r] = t.split(":");
        return {
            filePath: e,
            lineNumber: parseInt(s || "0", 10),
            col: parseInt(r || "0", 10),
        };
    },
    L = (t) => {
        let e = t.getAttribute("data-lov-id") || "";
        if (e) {
            let { filePath: o, lineNumber: d, col: a } = U(e);
            return { filePath: o || "", lineNumber: d || 0, col: a || 0 };
        }
        let s = t.getAttribute("data-component-path") || "",
            r = t.getAttribute("data-component-line") || "";
        return { filePath: s || "", lineNumber: parseInt(r, 10) || 0, col: 0 };
    },
    R = (t) => {
        let e = t.getAttribute("data-lov-id") || "",
            { filePath: s, lineNumber: r, col: o } = U(e),
            d = t.tagName.toLowerCase(),
            a = t.getAttribute("data-component-content") || null,
            T = Array.from(t.children)
                .filter((i) => _(i) && L(i).filePath !== s)
                .filter(
                    (i, E, b) =>
                        E ===
                        b.findIndex((O) => L(O).filePath === L(i).filePath)
                )
                .map((i) => ({
                    id: i.getAttribute("data-lov-id") || "",
                    filePath: L(i).filePath,
                    fileName: L(i).filePath?.split?.("/").pop() || "",
                    lineNumber: L(i).lineNumber,
                    col: L(i).col,
                    elementType: i.tagName.toLowerCase(),
                    content: i.getAttribute("data-component-content") || "",
                    className: i.getAttribute("class") || "",
                    textContent: i.innerText,
                    attrs: { src: i.getAttribute("src") || "" },
                }));
        return {
            id: t.getAttribute("data-lov-id") || "",
            filePath: L(t).filePath,
            fileName: L(t).filePath?.split?.("/").pop() || "",
            lineNumber: L(t).lineNumber,
            col: L(t).col,
            elementType: d,
            content: a || "",
            children: T,
            className: t.getAttribute("class") || "",
            textContent: t.innerText,
            attrs: { src: t.getAttribute("src") || "" },
        };
    },
    G = () => {
        class t {
            constructor() {
                (this.hoveredElement = null),
                    (this.isActive = !1),
                    (this.tooltip = null),
                    (this.scrollTimeout = null),
                    (this.mouseX = 0),
                    (this.mouseY = 0),
                    (this.styleElement = null);
            }
            reset() {
                (this.hoveredElement = null), (this.scrollTimeout = null);
            }
        }
        let e = new t(),
            s = (n, u) => {
                let g = null;
                return (...l) => {
                    g && clearTimeout(g), (g = setTimeout(() => n(...l), u));
                };
            };
        F();
        let r = () => {
                (e.tooltip = document.createElement("div")),
                    (e.tooltip.className = "gpt-selector-tooltip"),
                    e.tooltip.setAttribute("role", "tooltip"),
                    document.body.appendChild(e.tooltip);
                let n = document.createElement("style");
                (n.textContent = `
        .gpt-selector-tooltip {
          position: fixed;
          z-index: ${c.Z_INDEX};
          pointer-events: none;
          background-color: ${c.HIGHLIGHT_COLOR};
          color: white;
          padding: 4px 8px;
          border-radius: 4px;
          font-size: 14px;
          font-weight: bold;
          line-height: 1;
          white-space: nowrap;
          display: none;
          box-shadow: 0 2px 4px rgba(0,0,0,0.2);
          transition: opacity 0.2s ease-in-out;
          margin: 0;
        }
        [${c.HOVERED_ATTR}] {
          position: relative;
        }
        [${c.HOVERED_ATTR}]::before {
          content: '';
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          border-radius: 0px;
          outline: 1px dashed ${c.HIGHLIGHT_COLOR} !important;
          outline-offset: ${c.HIGHLIGHT_STYLE.NORMAL.OFFSET} !important;
          background-color: ${c.HIGHLIGHT_BG} !important;
          z-index: ${c.Z_INDEX};
          pointer-events: none;
        }

        [${c.SELECTED_ATTR}] {
          position: relative;
        }
        [${c.SELECTED_ATTR}]::before {
          content: '';
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          border-radius: 0px;
          outline: 1px dashed ${c.HIGHLIGHT_COLOR} !important;
          outline-offset: 3px !important;
          transition: outline-offset 0.2s ease-in-out;
          z-index: ${c.Z_INDEX};
          pointer-events: none;
        }

        [${c.SELECTED_ATTR}][contenteditable] {
          outline: none !important;
        }

        [${c.HOVERED_ATTR}][data-full-width]::before,
        [${c.SELECTED_ATTR}][data-full-width]::before {
          outline-offset: ${c.HIGHLIGHT_STYLE.FULL_WIDTH.OFFSET} !important;
        }
      `),
                    document.head.appendChild(n);
            },
            o = (n) => {
                if (!(!e.tooltip || !n))
                    try {
                        let u = n.getBoundingClientRect(),
                            g = n.tagName.toLowerCase(),
                            l = Math.abs(u.width - window.innerWidth) < 5;
                        if (
                            ((e.tooltip.style.maxWidth = `${c.MAX_TOOLTIP_WIDTH}px`),
                                l)
                        )
                            (e.tooltip.style.left =
                                c.FULL_WIDTH_TOOLTIP_OFFSET),
                                (e.tooltip.style.top =
                                    c.FULL_WIDTH_TOOLTIP_OFFSET);
                        else {
                            let p = Math.max(0, u.top - c.TOOLTIP_OFFSET);
                            (e.tooltip.style.left = `${Math.max(0, u.left)}px`),
                                (e.tooltip.style.top = `${p}px`);
                        }
                        e.tooltip.textContent = g;
                    } catch (u) {
                        console.error("Error updating tooltip:", u), b();
                    }
            },
            d = (n) => {
                let u =
                    Math.abs(
                        n.getBoundingClientRect().width - window.innerWidth
                    ) < 5;
                n.setAttribute(c.HOVERED_ATTR, "true"),
                u && n.setAttribute("data-full-width", "true");
            },
            a = (n) => {
                n.removeAttribute(c.HOVERED_ATTR),
                    n.removeAttribute("data-full-width"),
                    (n.style.cursor = "");
            },
            T = (n) => {
                let u = n.tagName.toLowerCase() === "svg",
                    g = n.closest("svg") !== null;
                return !u && g;
            },
            i = s((n) => {
                if (
                    !e.isActive ||
                    !_(n.target) ||
                    n.target.tagName.toLowerCase() === "html" ||
                    T(n.target)
                )
                    return;
                e.hoveredElement &&
                w(L(e.hoveredElement)).forEach((l) => {
                    l.classList.contains("gpt-selected-element") || a(l);
                }),
                    (e.hoveredElement = n.target),
                    (e.hoveredElement && w(L(e.hoveredElement)))?.forEach(
                        (g) => {
                            g.classList.contains("gpt-selected-element") ||
                            d(g);
                        }
                    ),
                    o(e.hoveredElement),
                e.tooltip &&
                ((e.tooltip.style.display = "block"),
                    (e.tooltip.style.opacity = "1"));
            }, c.DEBOUNCE_DELAY),
            E = s(() => {
                e.isActive &&
                (e.hoveredElement &&
                ((e.hoveredElement && w(L(e.hoveredElement)))?.forEach(
                    (u) => {
                        u.removeAttribute(c.HOVERED_ATTR),
                        u.hasAttribute(c.SELECTED_ATTR) || a(u);
                    }
                ),
                    (e.hoveredElement = null)),
                    b());
            }, c.DEBOUNCE_DELAY),
            b = () => {
                e.tooltip &&
                ((e.tooltip.style.opacity = "0"),
                    (e.tooltip.style.display = "none"));
            },
            O = () => {
                e.scrollTimeout && clearTimeout(e.scrollTimeout),
                    b(),
                e.hoveredElement &&
                !e.hoveredElement.classList.contains(
                    "gpt-selected-element"
                ) &&
                a(e.hoveredElement),
                    (e.scrollTimeout = setTimeout(() => {
                        e.scrollTimeout = null;
                        let n = document.elementFromPoint(e.mouseX, e.mouseY);
                        n && e.isActive && i({ target: n });
                    }, c.SCROLL_DEBOUNCE));
            },
            D = (n) => {
                e.isActive &&
                n.target &&
                n.target instanceof HTMLElement &&
                ["input", "textarea", "select"].includes(
                    n.target.tagName.toLowerCase()
                ) &&
                n.preventDefault();
            },
            S = (n) => {
                if (e.isActive)
                    return n.preventDefault(), n.stopPropagation(), !1;
            },
            j = () => {
                document.addEventListener("mouseover", i),
                    document.addEventListener("mouseout", E),
                    document.addEventListener("click", x, !0),
                    document.addEventListener("dblclick", q, !0),
                    window.addEventListener("scroll", O, { passive: !0 }),
                    document.addEventListener("mousedown", D, !0);
                let n = document.createElement("style");
                (n.textContent = `
        * {
          scroll-behavior: auto !important;
        }
      `),
                    document.head.appendChild(n),
                    (e.styleElement = n),
                    document.addEventListener("click", S, !0),
                    document.addEventListener("submit", S, !0),
                    document.addEventListener("touchstart", S, !0),
                    document.addEventListener("touchend", S, !0);
            },
            v = () => {
                document.removeEventListener("mouseover", i),
                    document.removeEventListener("mouseout", E),
                    document.removeEventListener("click", x),
                    window.removeEventListener("scroll", O),
                    document.removeEventListener("mousedown", D, !0),
                    document.removeEventListener("click", S, !0),
                    document.removeEventListener("submit", S, !0),
                    document.removeEventListener("touchstart", S, !0),
                    document.removeEventListener("touchend", S, !0),
                e.styleElement &&
                (e.styleElement.remove(), (e.styleElement = null)),
                    (document.body.style.cursor = ""),
                    (document.body.style.userSelect = ""),
                    (document.body.style.msUserSelect = ""),
                    (document.body.style.mozUserSelect = ""),
                e.hoveredElement &&
                (e.hoveredElement.hasAttribute(c.SELECTED_ATTR) ||
                a(e.hoveredElement),
                    (e.hoveredElement = null)),
                    b();
            },
            w = (n) => {
                let u = `[data-lov-id="${n.filePath}:${n.lineNumber}:${
                        n.col || "0"
                    }"]`,
                    g = document.querySelectorAll(u);
                if (g.length > 0) return g;
                let l = `[data-component-path="${n.filePath}"][data-component-line="${n.lineNumber}"]`;
                return document.querySelectorAll(l);
            },
            B = (n) => {
                try {
                    if (
                        !n?.origin ||
                        !n?.data?.type ||
                        !c.ALLOWED_ORIGINS.includes(n.origin)
                    )
                        return;
                    switch (n.data.type) {
                        case "TOGGLE_SELECTOR":
                            let u = !!n.data.payload;
                            e.isActive !== u &&
                            ((e.isActive = u),
                                e.isActive
                                    ? (j(),
                                        C().then(() => {
                                            document
                                                .querySelectorAll(
                                                    "button[disabled]"
                                                )
                                                .forEach((l) => {
                                                    l.removeAttribute("disabled"),
                                                        l.setAttribute(
                                                            "data-lov-disabled",
                                                            ""
                                                        );
                                                });
                                        }))
                                    : (v(),
                                        document
                                            .querySelectorAll(
                                                "[data-lov-disabled]"
                                            )
                                            .forEach((p) => {
                                                p.removeAttribute(
                                                    "data-lov-disabled"
                                                ),
                                                    p.setAttribute(
                                                        "disabled",
                                                        ""
                                                    );
                                            }),
                                        document
                                            .querySelectorAll(
                                                `[${c.HOVERED_ATTR}], [data-full-width]`
                                            )
                                            .forEach((p) => {
                                                p.hasAttribute(c.SELECTED_ATTR) ||
                                                (a(p),
                                                p instanceof HTMLElement &&
                                                (p.style.cursor = ""));
                                            }),
                                        e.reset()));
                            break;
                        case "UPDATE_SELECTED_ELEMENTS":
                            if (!Array.isArray(n.data.payload)) {
                                console.error(
                                    "Invalid payload for UPDATE_SELECTED_ELEMENTS"
                                );
                                return;
                            }
                            document
                                .querySelectorAll(
                                    `[${c.SELECTED_ATTR}], [${c.HOVERED_ATTR}]`
                                )
                                .forEach((l) => {
                                    l.removeAttribute(c.SELECTED_ATTR),
                                        l.removeAttribute(c.HOVERED_ATTR),
                                        l.removeAttribute("data-full-width");
                                }),
                                n.data.payload.forEach((l) => {
                                    if (!l?.filePath || !l?.lineNumber) {
                                        console.error(
                                            "Invalid element data:",
                                            l
                                        );
                                        return;
                                    }
                                    w({
                                        filePath: l.filePath,
                                        lineNumber: l.lineNumber,
                                        col: l.col,
                                    }).forEach((m) => {
                                        m.setAttribute(c.SELECTED_ATTR, "true"),
                                        Math.abs(
                                            m.getBoundingClientRect()
                                                .width - window.innerWidth
                                        ) < 5 &&
                                        m.setAttribute(
                                            "data-full-width",
                                            "true"
                                        );
                                    });
                                });
                            break;
                        case "GET_SELECTOR_STATE":
                            f({
                                type: "SELECTOR_STATE_RESPONSE",
                                payload: { isActive: e.isActive },
                            });
                            break;
                        case "SET_ELEMENT_CONTENT":
                        {
                            let { id: l, content: p } = n.data.payload;
                            w({
                                filePath: l.path,
                                lineNumber: l.line,
                            }).forEach((h) => {
                                h.innerHTML = p;
                            });
                        }
                            break;
                        case "SET_ELEMENT_ATTRS":
                        {
                            let { id: l, attrs: p } = n.data.payload;
                            w({
                                filePath: l.path,
                                lineNumber: l.line,
                            }).forEach((h) => {
                                Object.keys(p).forEach((N) => {
                                    h.setAttribute(N, p[N]);
                                });
                            });
                        }
                            break;
                        case "DUPLICATE_ELEMENT_REQUESTED": {
                            let { id: l } = n.data.payload;
                            w({ filePath: l.path, lineNumber: l.line }).forEach(
                                (m) => {
                                    let h = m.cloneNode(!0);
                                    h.setAttribute("data-lov-id", "x"),
                                        h.setAttribute("data-lov-tmp", "true"),
                                        m.parentElement?.appendChild(h);
                                }
                            );
                            break;
                        }
                        case "SET_STYLESHEET": {
                            let { stylesheet: l } = n.data.payload,
                                p = document.getElementById(
                                    c.OVERRIDE_STYLESHEET_ID
                                );
                            if (p) p.innerHTML = l;
                            else {
                                let m =
                                        document.getElementsByTagName(
                                            "head"
                                        )[0],
                                    h = document.createElement("style");
                                (h.id = c.OVERRIDE_STYLESHEET_ID),
                                    (h.innerHTML = l),
                                    m.appendChild(h);
                            }
                            break;
                        }
                        case "EDIT_TEXT_REQUESTED": {
                            let { id: l } = n.data.payload;
                            w({ filePath: l.path, lineNumber: l.line }).forEach(
                                (m) => {
                                    if (!(m instanceof HTMLElement)) return;
                                    m.setAttribute("contenteditable", "true"),
                                        m.focus();
                                    let h = () => {
                                            f({
                                                type: "ELEMENT_TEXT_UPDATED",
                                                payload: {
                                                    id: l,
                                                    content: m.innerText,
                                                },
                                            });
                                        },
                                        N = () => {
                                            m.removeAttribute(
                                                "contenteditable"
                                            ),
                                                m.removeEventListener(
                                                    "input",
                                                    h
                                                ),
                                                m.removeEventListener(
                                                    "blur",
                                                    N
                                                );
                                        };
                                    m.addEventListener("input", h),
                                        m.addEventListener("blur", N);
                                }
                            );
                            break;
                        }
                        case "HOVER_ELEMENT_REQUESTED": {
                            let { id: l } = n.data.payload;
                            document
                                .querySelectorAll(`[${c.HOVERED_ATTR}]`)
                                .forEach((m) => {
                                    m.removeAttribute(c.HOVERED_ATTR);
                                }),
                                w({
                                    filePath: l.path,
                                    lineNumber: l.line,
                                }).forEach((m) => {
                                    m.setAttribute(c.HOVERED_ATTR, "true");
                                });
                            break;
                        }
                        case "UNHOVER_ELEMENT_REQUESTED": {
                            let { id: l } = n.data.payload;
                            w({ filePath: l.path, lineNumber: l.line }).forEach(
                                (m) => {
                                    m.removeAttribute(c.HOVERED_ATTR);
                                }
                            );
                            break;
                        }
                        case "GET_PARENT_ELEMENT": {
                            let { id: l } = n.data.payload,
                                h = w({
                                    filePath: l.path,
                                    lineNumber: l.line,
                                })[0].parentElement;
                            !h ||
                            h.id === "root" ||
                            ["HTML", "BODY"].includes(h.tagName)
                                ? f({ type: "PARENT_ELEMENT", payload: null })
                                : f({ type: "PARENT_ELEMENT", payload: R(h) });
                            break;
                        }
                        case "REQUEST_COMPONENT_TREE":
                            $();
                            break;
                        default:
                            console.warn("Unknown message type:", n.data.type);
                    }
                } catch (u) {
                    console.error("Error handling message:", u), v(), e.reset();
                }
            },
            V = (n) => {
                (e.mouseX = n.clientX), (e.mouseY = n.clientY);
            },
            W = () => {
                f({ type: "REQUEST_PICKER_STATE" }),
                    f({ type: "REQUEST_SELECTED_ELEMENTS" });
            };
        (() => {
            try {
                r(),
                    window.addEventListener("message", B),
                    document.addEventListener("mousemove", V),
                    f({
                        type: "SELECTOR_SCRIPT_LOADED",
                        payload: {
                            version: window.LOV_SELECTOR_SCRIPT_VERSION,
                        },
                    }),
                    C().then(() => {
                        W();
                    });
            } catch (n) {
                console.error("Failed to initialize selector script:", n);
            }
        })();
        let x = (n) => {
                if (
                    e.isActive &&
                    !(
                        !_(n.target) ||
                        n.target.tagName.toLowerCase() === "html" ||
                        T(n.target)
                    ) &&
                    (n.preventDefault(), n.stopPropagation(), e.hoveredElement)
                ) {
                    let u = R(e.hoveredElement);
                    e.hoveredElement.setAttribute(c.SELECTED_ATTR, "true"),
                    Math.abs(
                        e.hoveredElement.getBoundingClientRect().width -
                        window.innerWidth
                    ) < 5 &&
                    e.hoveredElement.setAttribute(
                        "data-full-width",
                        "true"
                    ),
                        f({
                            type: "ELEMENT_CLICKED",
                            payload: u,
                            isMultiSelect: n.metaKey || n.ctrlKey,
                        });
                }
            },
            q = (n) => {
                if (
                    !e.isActive ||
                    !_(n.target) ||
                    n.target.tagName.toLowerCase() === "html" ||
                    T(n.target)
                )
                    return;
                n.preventDefault(), n.stopPropagation();
                let u = R(n.target);
                f({ type: "ELEMENT_DOUBLE_CLICKED", payload: u });
            };
    };
var K = () => {
    let t = (e) => {
        !e?.origin ||
        !e?.data?.type ||
        !c.ALLOWED_ORIGINS.includes(e.origin) ||
        (e.data.type === "NAVIGATE" &&
            (e.data.direction === "back"
                ? window.history.back()
                : e.data.direction === "forward" &&
                window.history.forward()));
    };
    window.addEventListener("message", t);
};
var te = () => {
    if (window.location.search.includes("lov-override-script")) {
        let t = "http://localhost:8001/gptengineer.js";
        console.log("Overriding gptengineer.js script with:", t);
        let e = document.createElement("script");
        (e.type = "module"), (e.src = t), document.body.appendChild(e);
        return;
    }
    window.top !== window.self && (M(), K(), P(), k(), G());
};
te();
