{"version":3, "file":"kernel_main.js", "sections": [{"offset": { "line": 48, "column": 0 }, "map": {"version":3,"file":"/bitrix/js/main/core/core_ls.min.js","sources":["/bitrix/js/main/core/core_ls.js"],"names":["window","BX","localStorage","localStorageInstance","_prefix","_key","_support","this","keyChanges","bind","browser","IsIE","IsIE9","document","proxy","_onchange","setInterval","delegate","_clear","checkBrowser","set","key","value","ttl","instance","get","remove","support","localStorageIE8","localStorageIE7","DoNothing","prototype","prefix","message","SITE_ID","e","event","DetectIeVersion","substring","length","d","newValue","_decode","oldValue","onCustomEvent","p","curDate","Date","i","getItem","split","removeItem","_encode","JSON","stringify","toString","answer","parse","_trigger_error","undefined","setItem","Math","round","storageAnswer","NS","__current_state","ready","_Init","extend","storage_element","body","appendChild","create","addBehavior","load","doc","xmlDocument","len","firstChild","attributes","k","nodeName","nodeValue","_Listener","bInit","v","new_state","arChanges","push","hasOwnProperty","removeAttribute","save","setAttribute","getAttribute","currentKey","currentValue","superclass","constructor","apply","arguments","onGlobalCustomEvent","eventName","arEventParams","bSkipSelf","_target","_checkFFnIE8","unbind","IsIE7"],"mappings":"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"}},{"offset": { "line": 52, "column": 0 }, "map": {"version":3,"file":"/bitrix/js/main/session.min.js","sources":["/bitrix/js/main/session.js"],"names":["CBXSession","_this","this","mess","timeout","sessid","bShowMess","dateStart","Date","dateInput","dateCheck","activityInterval","notifier","Expand","key","BX","ready","bind","document","OnUserInput","body","setTimeout","CheckSession","curr","setTime","valueOf","Math","round","interval","config","method","dataType","url","data","onsuccess","CheckResult","lsId","lsTimeout","lsForce","ajax","appendChild","create","props","className","style","top","backgroundColor","border","width","fontFamily","fontSize","fontWeight","textAlign","color","position","zIndex","padding","html","messSessExpired","windowScroll","GetWindowScrollPos","windowSize","GetWindowInnerSize","left","parseInt","scrollLeft","innerWidth","clientWidth","browser","IsIE","scrollTop","window","display","Close","bxSession"],"mappings":"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"}},{"offset": { "line": 68, "column": 0 }, "map": {"version":3,"file":"/bitrix/js/main/utils.min.js","sources":["/bitrix/js/main/utils.js"],"names":["phpVars","ADMIN_THEME_ID","LANGUAGE_ID","FORMAT_DATE","FORMAT_DATETIME","opt_context_ctrl","cookiePrefix","titlePrefix","bitrix_sessid","messHideMenu","messShowMenu","messHideButtons","messShowButtons","messFilterInactive","messFilterActive","messFilterLess","messLoading","messMenuLoading","messMenuLoadingTitle","messNoData","messExpandTabs","messCollapseTabs","messPanelFixOn","messPanelFixOff","messPanelCollapse","messPanelExpand","jsUtils","arEvents","Array","addEvent","el","evname","func","capture","attachEvent","addEventListener","this","length","element","event","fn","removeEvent","detachEvent","removeEventListener","removeAllEvents","i","IsDoctype","document","compatMode","documentElement","clientHeight","GetRealPos","window","BX","pos","offsetParent","res","offsetLeft","offsetTop","objParent","tagName","offsetWidth","offsetHeight","FindChildObject","obj","tag_name","class_name","recursive","tag","toUpperCase","cl","toLowerCase","n","childNodes","j","child","className","deepChild","FindParentObject","o","parentNode","parent","FindNextSibling","nextSibling","sibling","FindPreviousSibling","previousSibling","bOpera","navigator","userAgent","indexOf","bIsIE","IsIE","IsOpera","IsSafari","test","IsEditor","version","match","safari","all","ToggleDiv","div","style","getElementById","display","urlencode","s","escape","replace","RegExp","OpenWindow","url","width","height","w","screen","h","body","open","Math","floor","SetPageTitle","title","h1","getElementsByTagName","innerHTML","LoadPageToDiv","div_id","CHttpRequest","Action","result","CloseWaitWindow","ShowWaitWindow","Send","trim","constructor","String","r","re","Redirect","args","e","bShift","shiftKey","location","href","False","AlignToPos","x","y","scroll","GetWindowScrollPos","size","GetWindowInnerSize","innerWidth","scrollLeft","innerHeight","scrollTop","left","top","EvalGlobal","script","execScript","setTimeout","eval","GetStyleValue","styleProp","currentStyle","getComputedStyle","defaultView","getPropertyValue","pDoc","self","clientWidth","pageYOffset","pageXOffset","GetWindowScrollSize","scrollWidth","scrollHeight","GetWindowSize","innerSize","scrollPos","scrollSize","arCustomEvents","addCustomEvent","eventName","eventHandler","arParams","handlerContextObject","push","handler","removeCustomEvent","l","onCustomEvent","arEventParams","call","loadJSFile","arJs","oCallBack","callback","p","params","apply","load_js","ind","oSript","appendChild","createElement","src","bLoaded","onload","onreadystatechange","readyState","loadCSSFile","arCSS","pWin","bSingle","pLnk","bxhead","heads","lnk","rel","type","appendBXHint","node","html","oBXHint","BXHint","insertBefore","oIcon","removeChild","marginLeft","PreventDefault","stopPropagation","preventDefault","cancelBubble","returnValue","CreateElement","arAttr","arStyles","pEl","setAttribute","undefined","in_array","needle","haystack","htmlspecialchars","str","JCFloatDiv","_this","floatDiv","Create","id","position","zIndex","Show","dxShadow","restrictDrag","showSubFrame","parseInt","isNaN","frame","borderWidth","visibility","img","filter","lineHeight","Close","sh","Move","windowWidth","floatWidth","AdjustShadow","HideShadow","UnhideShadow","StartDrag","clientX","clientY","MoveDrag","onmouseup","StopDrag","setCapture","onmousedown","b","ondrag","onselectstart","MozUserSelect","cursor","releaseCapture","jsFloatDiv","addParams","oDivOver","timeOutID","freeze","time","prototype","bWidth","iconSrc","onclick","show_on_click","GetMouseXY","clearTimeout","SmartHide","onmouseover","onmouseout","IsFrozen","Freeze","Hide","UnFreeze","pageX","pageY","clientLeft","clientTop","old","oDiv","round","sqrt","right","bottom","WaitOnKeyPress","keyCode","obWndSize","jsSelectUtils","addNewOption","select_id","opt_value","opt_name","do_sort","check_unique","oSelect","value","newoption","Option","options","sortSelect","deleteOption","remove","deleteSelectedOptions","selected","deleteAllOptions","optionCompare","record1","record2","value1","optText","value2","myOptions","text","optValue","sort","selectAllOptions","selectOption","addSelectedOptions","to_select_id","moveOptionsUp","option1","option2","moveOptionsDown"],"mappings":"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"}}]}