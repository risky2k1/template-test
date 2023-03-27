<!--end::Global Stylesheets Bundle-->
<style type="text/css">.vis-time-axis {
        overflow: hidden;
        position: relative
    }

    .vis-time-axis.vis-foreground {
        left: 0;
        top: 0;
        width: 100%
    }

    .vis-time-axis.vis-background {
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%
    }

    .vis-time-axis .vis-text {
        box-sizing: border-box;
        color: #4d4d4d;
        overflow: hidden;
        padding: 3px;
        position: absolute;
        white-space: nowrap
    }

    .vis-time-axis .vis-text.vis-measure {
        margin-left: 0;
        margin-right: 0;
        padding-left: 0;
        padding-right: 0;
        position: absolute;
        visibility: hidden
    }

    .vis-time-axis .vis-grid.vis-vertical {
        border-left: 1px solid;
        position: absolute
    }

    .vis-time-axis .vis-grid.vis-vertical-rtl {
        border-right: 1px solid;
        position: absolute
    }

    .vis-time-axis .vis-grid.vis-minor {
        border-color: #e5e5e5
    }

    .vis-time-axis .vis-grid.vis-major {
        border-color: #bfbfbf
    }</style>
<style type="text/css">.vis .overlay {
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 10
    }

    .vis-active {
        box-shadow: 0 0 10px #86d5f8
    }</style>
<style type="text/css">.vis-custom-time {
        background-color: #6e94ff;
        cursor: move;
        width: 2px;
        z-index: 1
    }

    .vis-custom-time > .vis-custom-time-marker {
        background-color: inherit;
        color: #fff;
        cursor: auto;
        font-size: 12px;
        padding: 3px 5px;
        top: 0;
        white-space: nowrap;
        z-index: inherit
    }</style>
<style type="text/css">.vis-current-time {
        background-color: #ff7f6e;
        pointer-events: none;
        width: 2px;
        z-index: 1
    }

    .vis-rolling-mode-btn {
        background: #3876c2;
        border-radius: 50%;
        color: #fff;
        cursor: pointer;
        font-size: 28px;
        font-weight: 700;
        height: 40px;
        opacity: .8;
        position: absolute;
        right: 20px;
        text-align: center;
        top: 7px;
        width: 40px
    }

    .vis-rolling-mode-btn:before {
        content: "\26F6"
    }

    .vis-rolling-mode-btn:hover {
        opacity: 1
    }</style>
<style type="text/css">.vis-panel {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        position: absolute
    }

    .vis-panel.vis-bottom, .vis-panel.vis-center, .vis-panel.vis-left, .vis-panel.vis-right, .vis-panel.vis-top {
        border: 1px #bfbfbf
    }

    .vis-panel.vis-center, .vis-panel.vis-left, .vis-panel.vis-right {
        border-bottom-style: solid;
        border-top-style: solid;
        overflow: hidden
    }

    .vis-left.vis-panel.vis-vertical-scroll, .vis-right.vis-panel.vis-vertical-scroll {
        height: 100%;
        overflow-x: hidden;
        overflow-y: scroll
    }

    .vis-left.vis-panel.vis-vertical-scroll {
        direction: rtl
    }

    .vis-left.vis-panel.vis-vertical-scroll .vis-content, .vis-right.vis-panel.vis-vertical-scroll {
        direction: ltr
    }

    .vis-right.vis-panel.vis-vertical-scroll .vis-content {
        direction: rtl
    }

    .vis-panel.vis-bottom, .vis-panel.vis-center, .vis-panel.vis-top {
        border-left-style: solid;
        border-right-style: solid
    }

    .vis-background {
        overflow: hidden
    }

    .vis-panel > .vis-content {
        position: relative
    }

    .vis-panel .vis-shadow {
        box-shadow: 0 0 10px rgba(0, 0, 0, .8);
        height: 1px;
        position: absolute;
        width: 100%
    }

    .vis-panel .vis-shadow.vis-top {
        left: 0;
        top: -1px
    }

    .vis-panel .vis-shadow.vis-bottom {
        bottom: -1px;
        left: 0
    }</style>
<style type="text/css">.vis-graph-group0 {
        fill: #4f81bd;
        fill-opacity: 0;
        stroke-width: 2px;
        stroke: #4f81bd
    }

    .vis-graph-group1 {
        fill: #f79646;
        fill-opacity: 0;
        stroke-width: 2px;
        stroke: #f79646
    }

    .vis-graph-group2 {
        fill: #8c51cf;
        fill-opacity: 0;
        stroke-width: 2px;
        stroke: #8c51cf
    }

    .vis-graph-group3 {
        fill: #75c841;
        fill-opacity: 0;
        stroke-width: 2px;
        stroke: #75c841
    }

    .vis-graph-group4 {
        fill: #ff0100;
        fill-opacity: 0;
        stroke-width: 2px;
        stroke: #ff0100
    }

    .vis-graph-group5 {
        fill: #37d8e6;
        fill-opacity: 0;
        stroke-width: 2px;
        stroke: #37d8e6
    }

    .vis-graph-group6 {
        fill: #042662;
        fill-opacity: 0;
        stroke-width: 2px;
        stroke: #042662
    }

    .vis-graph-group7 {
        fill: #00ff26;
        fill-opacity: 0;
        stroke-width: 2px;
        stroke: #00ff26
    }

    .vis-graph-group8 {
        fill: #f0f;
        fill-opacity: 0;
        stroke-width: 2px;
        stroke: #f0f
    }

    .vis-graph-group9 {
        fill: #8f3938;
        fill-opacity: 0;
        stroke-width: 2px;
        stroke: #8f3938
    }

    .vis-timeline .vis-fill {
        fill-opacity: .1;
        stroke: none
    }

    .vis-timeline .vis-bar {
        fill-opacity: .5;
        stroke-width: 1px
    }

    .vis-timeline .vis-point {
        stroke-width: 2px;
        fill-opacity: 1
    }

    .vis-timeline .vis-legend-background {
        stroke-width: 1px;
        fill-opacity: .9;
        fill: #fff;
        stroke: #c2c2c2
    }

    .vis-timeline .vis-outline {
        stroke-width: 1px;
        fill-opacity: 1;
        fill: #fff;
        stroke: #e5e5e5
    }

    .vis-timeline .vis-icon-fill {
        fill-opacity: .3;
        stroke: none
    }</style>
<style type="text/css">.vis-timeline {
        border: 1px solid #bfbfbf;
        box-sizing: border-box;
        margin: 0;
        overflow: hidden;
        padding: 0;
        position: relative
    }

    .vis-loading-screen {
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%
    }</style>
<style type="text/css">.vis [class*=span] {
        min-height: 0;
        width: auto
    }</style>
<style type="text/css">.vis-item {
        background-color: #d5ddf6;
        border-color: #97b0f8;
        border-width: 1px;
        color: #1a1a1a;
        display: inline-block;
        position: absolute;
        z-index: 1
    }

    .vis-item.vis-selected {
        background-color: #fff785;
        border-color: #ffc200;
        z-index: 2
    }

    .vis-editable.vis-selected {
        cursor: move
    }

    .vis-item.vis-point.vis-selected {
        background-color: #fff785
    }

    .vis-item.vis-box {
        border-radius: 2px;
        border-style: solid;
        text-align: center
    }

    .vis-item.vis-point {
        background: none
    }

    .vis-item.vis-dot {
        border-radius: 4px;
        border-style: solid;
        border-width: 4px;
        padding: 0;
        position: absolute
    }

    .vis-item.vis-range {
        border-radius: 2px;
        border-style: solid;
        box-sizing: border-box
    }

    .vis-item.vis-background {
        background-color: rgba(213, 221, 246, .4);
        border: none;
        box-sizing: border-box;
        margin: 0;
        padding: 0
    }

    .vis-item .vis-item-overflow {
        height: 100%;
        margin: 0;
        overflow: hidden;
        padding: 0;
        position: relative;
        width: 100%
    }

    .vis-item-visible-frame {
        white-space: nowrap
    }

    .vis-item.vis-range .vis-item-content {
        display: inline-block;
        position: relative
    }

    .vis-item.vis-background .vis-item-content {
        display: inline-block;
        position: absolute
    }

    .vis-item.vis-line {
        border-left-style: solid;
        border-left-width: 1px;
        padding: 0;
        position: absolute;
        width: 0
    }

    .vis-item .vis-item-content {
        box-sizing: border-box;
        padding: 5px;
        white-space: nowrap
    }

    .vis-item .vis-onUpdateTime-tooltip {
        background: #4f81bd;
        border-radius: 1px;
        color: #fff;
        padding: 5px;
        position: absolute;
        text-align: center;
        transition: .4s;
        -o-transition: .4s;
        -moz-transition: .4s;
        -webkit-transition: .4s;
        white-space: nowrap;
        width: 200px
    }

    .vis-item .vis-delete, .vis-item .vis-delete-rtl {
        box-sizing: border-box;
        cursor: pointer;
        height: 24px;
        padding: 0 5px;
        position: absolute;
        top: 0;
        -webkit-transition: background .2s linear;
        -moz-transition: background .2s linear;
        -ms-transition: background .2s linear;
        -o-transition: background .2s linear;
        transition: background .2s linear;
        width: 24px
    }

    .vis-item .vis-delete {
        right: -24px
    }

    .vis-item .vis-delete-rtl {
        left: -24px
    }

    .vis-item .vis-delete-rtl:after, .vis-item .vis-delete:after {
        color: red;
        content: "\00D7";
        font-family: arial, sans-serif;
        font-size: 22px;
        font-weight: 700;
        -webkit-transition: color .2s linear;
        -moz-transition: color .2s linear;
        -ms-transition: color .2s linear;
        -o-transition: color .2s linear;
        transition: color .2s linear
    }

    .vis-item .vis-delete-rtl:hover, .vis-item .vis-delete:hover {
        background: red
    }

    .vis-item .vis-delete-rtl:hover:after, .vis-item .vis-delete:hover:after {
        color: #fff
    }

    .vis-item .vis-drag-center {
        cursor: move;
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%
    }

    .vis-item.vis-range .vis-drag-left {
        cursor: w-resize;
        left: -4px
    }

    .vis-item.vis-range .vis-drag-left, .vis-item.vis-range .vis-drag-right {
        height: 100%;
        max-width: 20%;
        min-width: 2px;
        position: absolute;
        top: 0;
        width: 24px
    }

    .vis-item.vis-range .vis-drag-right {
        cursor: e-resize;
        right: -4px
    }

    .vis-range.vis-item.vis-readonly .vis-drag-left, .vis-range.vis-item.vis-readonly .vis-drag-right {
        cursor: auto
    }

    .vis-item.vis-cluster {
        border-radius: 2px;
        border-style: solid;
        text-align: center;
        vertical-align: center
    }

    .vis-item.vis-cluster-line {
        border-left-style: solid;
        border-left-width: 1px;
        padding: 0;
        position: absolute;
        width: 0
    }

    .vis-item.vis-cluster-dot {
        border-radius: 4px;
        border-style: solid;
        border-width: 4px;
        padding: 0;
        position: absolute
    }</style>
<style type="text/css">div.vis-tooltip {
        background-color: #f5f4ed;
        border: 1px solid #808074;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        box-shadow: 3px 3px 10px rgba(0, 0, 0, .2);
        color: #000;
        font-family: verdana;
        font-size: 14px;
        padding: 5px;
        pointer-events: none;
        position: absolute;
        visibility: hidden;
        white-space: nowrap;
        z-index: 5
    }</style>
<style type="text/css">.vis-itemset {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        position: relative
    }

    .vis-itemset .vis-background, .vis-itemset .vis-foreground {
        height: 100%;
        overflow: visible;
        position: absolute;
        width: 100%
    }

    .vis-axis {
        height: 0;
        left: 0;
        position: absolute;
        width: 100%;
        z-index: 1
    }

    .vis-foreground .vis-group {
        border-bottom: 1px solid #bfbfbf;
        box-sizing: border-box;
        position: relative
    }

    .vis-foreground .vis-group:last-child {
        border-bottom: none
    }

    .vis-nesting-group {
        cursor: pointer
    }

    .vis-label.vis-nested-group.vis-group-level-unknown-but-gte1 {
        background: #f5f5f5
    }

    .vis-label.vis-nested-group.vis-group-level-0 {
        background-color: #fff
    }

    .vis-ltr .vis-label.vis-nested-group.vis-group-level-0 .vis-inner {
        padding-left: 0
    }

    .vis-rtl .vis-label.vis-nested-group.vis-group-level-0 .vis-inner {
        padding-right: 0
    }

    .vis-label.vis-nested-group.vis-group-level-1 {
        background-color: rgba(0, 0, 0, .05)
    }

    .vis-ltr .vis-label.vis-nested-group.vis-group-level-1 .vis-inner {
        padding-left: 15px
    }

    .vis-rtl .vis-label.vis-nested-group.vis-group-level-1 .vis-inner {
        padding-right: 15px
    }

    .vis-label.vis-nested-group.vis-group-level-2 {
        background-color: rgba(0, 0, 0, .1)
    }

    .vis-ltr .vis-label.vis-nested-group.vis-group-level-2 .vis-inner {
        padding-left: 30px
    }

    .vis-rtl .vis-label.vis-nested-group.vis-group-level-2 .vis-inner {
        padding-right: 30px
    }

    .vis-label.vis-nested-group.vis-group-level-3 {
        background-color: rgba(0, 0, 0, .15)
    }

    .vis-ltr .vis-label.vis-nested-group.vis-group-level-3 .vis-inner {
        padding-left: 45px
    }

    .vis-rtl .vis-label.vis-nested-group.vis-group-level-3 .vis-inner {
        padding-right: 45px
    }

    .vis-label.vis-nested-group.vis-group-level-4 {
        background-color: rgba(0, 0, 0, .2)
    }

    .vis-ltr .vis-label.vis-nested-group.vis-group-level-4 .vis-inner {
        padding-left: 60px
    }

    .vis-rtl .vis-label.vis-nested-group.vis-group-level-4 .vis-inner {
        padding-right: 60px
    }

    .vis-label.vis-nested-group.vis-group-level-5 {
        background-color: rgba(0, 0, 0, .25)
    }

    .vis-ltr .vis-label.vis-nested-group.vis-group-level-5 .vis-inner {
        padding-left: 75px
    }

    .vis-rtl .vis-label.vis-nested-group.vis-group-level-5 .vis-inner {
        padding-right: 75px
    }

    .vis-label.vis-nested-group.vis-group-level-6 {
        background-color: rgba(0, 0, 0, .3)
    }

    .vis-ltr .vis-label.vis-nested-group.vis-group-level-6 .vis-inner {
        padding-left: 90px
    }

    .vis-rtl .vis-label.vis-nested-group.vis-group-level-6 .vis-inner {
        padding-right: 90px
    }

    .vis-label.vis-nested-group.vis-group-level-7 {
        background-color: rgba(0, 0, 0, .35)
    }

    .vis-ltr .vis-label.vis-nested-group.vis-group-level-7 .vis-inner {
        padding-left: 105px
    }

    .vis-rtl .vis-label.vis-nested-group.vis-group-level-7 .vis-inner {
        padding-right: 105px
    }

    .vis-label.vis-nested-group.vis-group-level-8 {
        background-color: rgba(0, 0, 0, .4)
    }

    .vis-ltr .vis-label.vis-nested-group.vis-group-level-8 .vis-inner {
        padding-left: 120px
    }

    .vis-rtl .vis-label.vis-nested-group.vis-group-level-8 .vis-inner {
        padding-right: 120px
    }

    .vis-label.vis-nested-group.vis-group-level-9 {
        background-color: rgba(0, 0, 0, .45)
    }

    .vis-ltr .vis-label.vis-nested-group.vis-group-level-9 .vis-inner {
        padding-left: 135px
    }

    .vis-rtl .vis-label.vis-nested-group.vis-group-level-9 .vis-inner {
        padding-right: 135px
    }

    .vis-label.vis-nested-group {
        background-color: rgba(0, 0, 0, .5)
    }

    .vis-ltr .vis-label.vis-nested-group .vis-inner {
        padding-left: 150px
    }

    .vis-rtl .vis-label.vis-nested-group .vis-inner {
        padding-right: 150px
    }

    .vis-group-level-unknown-but-gte1 {
        border: 1px solid red
    }

    .vis-label.vis-nesting-group:before {
        display: inline-block;
        width: 15px
    }

    .vis-label.vis-nesting-group.expanded:before {
        content: "\25BC"
    }

    .vis-label.vis-nesting-group.collapsed:before {
        content: "\25B6"
    }

    .vis-rtl .vis-label.vis-nesting-group.collapsed:before {
        content: "\25C0"
    }

    .vis-ltr .vis-label:not(.vis-nesting-group):not(.vis-group-level-0) {
        padding-left: 15px
    }

    .vis-rtl .vis-label:not(.vis-nesting-group):not(.vis-group-level-0) {
        padding-right: 15px
    }

    .vis-overlay {
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 10
    }</style>
<style type="text/css">.vis-labelset {
        overflow: hidden
    }

    .vis-labelset, .vis-labelset .vis-label {
        box-sizing: border-box;
        position: relative
    }

    .vis-labelset .vis-label {
        border-bottom: 1px solid #bfbfbf;
        color: #4d4d4d;
        left: 0;
        top: 0;
        width: 100%
    }

    .vis-labelset .vis-label.draggable {
        cursor: pointer
    }

    .vis-group-is-dragging {
        background: rgba(0, 0, 0, .1)
    }

    .vis-labelset .vis-label:last-child {
        border-bottom: none
    }

    .vis-labelset .vis-label .vis-inner {
        display: inline-block;
        padding: 5px
    }

    .vis-labelset .vis-label .vis-inner.vis-hidden {
        padding: 0
    }</style>
<style type="text/css">div.vis-configuration {
        display: block;
        float: left;
        font-size: 12px;
        position: relative
    }

    div.vis-configuration-wrapper {
        display: block;
        width: 700px
    }

    div.vis-configuration-wrapper:after {
        clear: both;
        content: "";
        display: block
    }

    div.vis-configuration.vis-config-option-container {
        background-color: #fff;
        border: 2px solid #f7f8fa;
        border-radius: 4px;
        display: block;
        left: 10px;
        margin-top: 20px;
        padding-left: 5px;
        width: 495px
    }

    div.vis-configuration.vis-config-button {
        background-color: #f7f8fa;
        border: 2px solid #ceced0;
        border-radius: 4px;
        cursor: pointer;
        display: block;
        height: 25px;
        left: 10px;
        line-height: 25px;
        margin-bottom: 30px;
        margin-top: 20px;
        padding-left: 5px;
        vertical-align: middle;
        width: 495px
    }

    div.vis-configuration.vis-config-button.hover {
        background-color: #4588e6;
        border: 2px solid #214373;
        color: #fff
    }

    div.vis-configuration.vis-config-item {
        display: block;
        float: left;
        height: 25px;
        line-height: 25px;
        vertical-align: middle;
        width: 495px
    }

    div.vis-configuration.vis-config-item.vis-config-s2 {
        background-color: #f7f8fa;
        border-radius: 3px;
        left: 10px;
        padding-left: 5px
    }

    div.vis-configuration.vis-config-item.vis-config-s3 {
        background-color: #e4e9f0;
        border-radius: 3px;
        left: 20px;
        padding-left: 5px
    }

    div.vis-configuration.vis-config-item.vis-config-s4 {
        background-color: #cfd8e6;
        border-radius: 3px;
        left: 30px;
        padding-left: 5px
    }

    div.vis-configuration.vis-config-header {
        font-size: 18px;
        font-weight: 700
    }

    div.vis-configuration.vis-config-label {
        height: 25px;
        line-height: 25px;
        width: 120px
    }

    div.vis-configuration.vis-config-label.vis-config-s3 {
        width: 110px
    }

    div.vis-configuration.vis-config-label.vis-config-s4 {
        width: 100px
    }

    div.vis-configuration.vis-config-colorBlock {
        border: 1px solid #444;
        border-radius: 2px;
        cursor: pointer;
        height: 19px;
        margin: 0;
        padding: 0;
        top: 1px;
        width: 30px
    }

    input.vis-configuration.vis-config-checkbox {
        left: -5px
    }

    input.vis-configuration.vis-config-rangeinput {
        margin: 0;
        padding: 1px;
        pointer-events: none;
        position: relative;
        top: -5px;
        width: 60px
    }

    input.vis-configuration.vis-config-range {
        -webkit-appearance: none;
        background-color: transparent;
        border: 0 solid #fff;
        height: 20px;
        width: 300px
    }

    input.vis-configuration.vis-config-range::-webkit-slider-runnable-track {
        background: #dedede;
        background: -moz-linear-gradient(top, #dedede 0, #c8c8c8 99%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #dedede), color-stop(99%, #c8c8c8));
        background: -webkit-linear-gradient(top, #dedede, #c8c8c8 99%);
        background: -o-linear-gradient(top, #dedede 0, #c8c8c8 99%);
        background: -ms-linear-gradient(top, #dedede 0, #c8c8c8 99%);
        background: linear-gradient(180deg, #dedede 0, #c8c8c8 99%);
        border: 1px solid #999;
        border-radius: 3px;
        box-shadow: 0 0 3px 0 #aaa;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#dedede", endColorstr="#c8c8c8", GradientType=0);
        height: 5px;
        width: 300px
    }

    input.vis-configuration.vis-config-range::-webkit-slider-thumb {
        -webkit-appearance: none;
        background: #3876c2;
        background: -moz-linear-gradient(top, #3876c2 0, #385380 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #3876c2), color-stop(100%, #385380));
        background: -webkit-linear-gradient(top, #3876c2, #385380);
        background: -o-linear-gradient(top, #3876c2 0, #385380 100%);
        background: -ms-linear-gradient(top, #3876c2 0, #385380 100%);
        background: linear-gradient(180deg, #3876c2 0, #385380);
        border: 1px solid #14334b;
        border-radius: 50%;
        box-shadow: 0 0 1px 0 #111927;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#3876c2", endColorstr="#385380", GradientType=0);
        height: 17px;
        margin-top: -7px;
        width: 17px
    }

    input.vis-configuration.vis-config-range:focus {
        outline: none
    }

    input.vis-configuration.vis-config-range:focus::-webkit-slider-runnable-track {
        background: #9d9d9d;
        background: -moz-linear-gradient(top, #9d9d9d 0, #c8c8c8 99%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #9d9d9d), color-stop(99%, #c8c8c8));
        background: -webkit-linear-gradient(top, #9d9d9d, #c8c8c8 99%);
        background: -o-linear-gradient(top, #9d9d9d 0, #c8c8c8 99%);
        background: -ms-linear-gradient(top, #9d9d9d 0, #c8c8c8 99%);
        background: linear-gradient(180deg, #9d9d9d 0, #c8c8c8 99%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#9d9d9d", endColorstr="#c8c8c8", GradientType=0)
    }

    input.vis-configuration.vis-config-range::-moz-range-track {
        background: #dedede;
        background: -moz-linear-gradient(top, #dedede 0, #c8c8c8 99%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #dedede), color-stop(99%, #c8c8c8));
        background: -webkit-linear-gradient(top, #dedede, #c8c8c8 99%);
        background: -o-linear-gradient(top, #dedede 0, #c8c8c8 99%);
        background: -ms-linear-gradient(top, #dedede 0, #c8c8c8 99%);
        background: linear-gradient(180deg, #dedede 0, #c8c8c8 99%);
        border: 1px solid #999;
        border-radius: 3px;
        box-shadow: 0 0 3px 0 #aaa;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#dedede", endColorstr="#c8c8c8", GradientType=0);
        height: 10px;
        width: 300px
    }

    input.vis-configuration.vis-config-range::-moz-range-thumb {
        background: #385380;
        border: none;
        border-radius: 50%;
        height: 16px;
        width: 16px
    }

    input.vis-configuration.vis-config-range:-moz-focusring {
        outline: 1px solid #fff;
        outline-offset: -1px
    }

    input.vis-configuration.vis-config-range::-ms-track {
        background: transparent;
        border-color: transparent;
        border-width: 6px 0;
        color: transparent;
        height: 5px;
        width: 300px
    }

    input.vis-configuration.vis-config-range::-ms-fill-lower {
        background: #777;
        border-radius: 10px
    }

    input.vis-configuration.vis-config-range::-ms-fill-upper {
        background: #ddd;
        border-radius: 10px
    }

    input.vis-configuration.vis-config-range::-ms-thumb {
        background: #385380;
        border: none;
        border-radius: 50%;
        height: 16px;
        width: 16px
    }

    input.vis-configuration.vis-config-range:focus::-ms-fill-lower {
        background: #888
    }

    input.vis-configuration.vis-config-range:focus::-ms-fill-upper {
        background: #ccc
    }

    .vis-configuration-popup {
        background: rgba(57, 76, 89, .85);
        border: 2px solid #f2faff;
        border-radius: 4px;
        color: #fff;
        font-size: 14px;
        height: 30px;
        line-height: 30px;
        position: absolute;
        text-align: center;
        -webkit-transition: opacity .3s ease-in-out;
        -moz-transition: opacity .3s ease-in-out;
        transition: opacity .3s ease-in-out;
        width: 150px
    }

    .vis-configuration-popup:after, .vis-configuration-popup:before {
        border: solid transparent;
        content: " ";
        height: 0;
        left: 100%;
        pointer-events: none;
        position: absolute;
        top: 50%;
        width: 0
    }

    .vis-configuration-popup:after {
        border-color: rgba(136, 183, 213, 0) rgba(136, 183, 213, 0) rgba(136, 183, 213, 0) rgba(57, 76, 89, .85);
        border-width: 8px;
        margin-top: -8px
    }

    .vis-configuration-popup:before {
        border-color: rgba(194, 225, 245, 0) rgba(194, 225, 245, 0) rgba(194, 225, 245, 0) #f2faff;
        border-width: 12px;
        margin-top: -12px
    }</style>
<style type="text/css">.vis-panel.vis-background.vis-horizontal .vis-grid.vis-horizontal {
        border-bottom: 1px solid;
        height: 0;
        position: absolute;
        width: 100%
    }

    .vis-panel.vis-background.vis-horizontal .vis-grid.vis-minor {
        border-color: #e5e5e5
    }

    .vis-panel.vis-background.vis-horizontal .vis-grid.vis-major {
        border-color: #bfbfbf
    }

    .vis-data-axis .vis-y-axis.vis-major {
        color: #4d4d4d;
        position: absolute;
        white-space: nowrap;
        width: 100%
    }

    .vis-data-axis .vis-y-axis.vis-major.vis-measure {
        border: 0;
        margin: 0;
        padding: 0;
        visibility: hidden;
        width: auto
    }

    .vis-data-axis .vis-y-axis.vis-minor {
        color: #bebebe;
        position: absolute;
        white-space: nowrap;
        width: 100%
    }

    .vis-data-axis .vis-y-axis.vis-minor.vis-measure {
        border: 0;
        margin: 0;
        padding: 0;
        visibility: hidden;
        width: auto
    }

    .vis-data-axis .vis-y-axis.vis-title {
        bottom: 20px;
        color: #4d4d4d;
        position: absolute;
        text-align: center;
        white-space: nowrap
    }

    .vis-data-axis .vis-y-axis.vis-title.vis-measure {
        margin: 0;
        padding: 0;
        visibility: hidden;
        width: auto
    }

    .vis-data-axis .vis-y-axis.vis-title.vis-left {
        bottom: 0;
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
        -webkit-transform-origin: left top;
        -moz-transform-origin: left top;
        -ms-transform-origin: left top;
        -o-transform-origin: left top;
        transform-origin: left bottom
    }

    .vis-data-axis .vis-y-axis.vis-title.vis-right {
        bottom: 0;
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
        -webkit-transform-origin: right bottom;
        -moz-transform-origin: right bottom;
        -ms-transform-origin: right bottom;
        -o-transform-origin: right bottom;
        transform-origin: right bottom
    }

    .vis-legend {
        background-color: rgba(247, 252, 255, .65);
        border: 1px solid #b3b3b3;
        box-shadow: 2px 2px 10px hsla(0, 0%, 60%, .55);
        padding: 5px
    }

    .vis-legend-text {
        display: inline-block;
        white-space: nowrap
    }</style>
<style id="apexcharts-css">@keyframes opaque {
                               0% {
                                   opacity: 0
                               }

                               to {
                                   opacity: 1
                               }
                           }

    @keyframes resizeanim {
        0%, to {
            opacity: 0
        }
    }

    .apexcharts-canvas {
        position: relative;
        user-select: none
    }

    .apexcharts-canvas ::-webkit-scrollbar {
        -webkit-appearance: none;
        width: 6px
    }

    .apexcharts-canvas ::-webkit-scrollbar-thumb {
        border-radius: 4px;
        background-color: rgba(0, 0, 0, .5);
        box-shadow: 0 0 1px rgba(255, 255, 255, .5);
        -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5)
    }

    .apexcharts-inner {
        position: relative
    }

    .apexcharts-text tspan {
        font-family: inherit
    }

    .legend-mouseover-inactive {
        transition: .15s ease all;
        opacity: .2
    }

    .apexcharts-series-collapsed {
        opacity: 0
    }

    .apexcharts-tooltip {
        border-radius: 5px;
        box-shadow: 2px 2px 6px -4px #999;
        cursor: default;
        font-size: 14px;
        left: 62px;
        opacity: 0;
        pointer-events: none;
        position: absolute;
        top: 20px;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        white-space: nowrap;
        z-index: 12;
        transition: .15s ease all
    }

    .apexcharts-tooltip.apexcharts-active {
        opacity: 1;
        transition: .15s ease all
    }

    .apexcharts-tooltip.apexcharts-theme-light {
        border: 1px solid #e3e3e3;
        background: rgba(255, 255, 255, .96)
    }

    .apexcharts-tooltip.apexcharts-theme-dark {
        color: #fff;
        background: rgba(30, 30, 30, .8)
    }

    .apexcharts-tooltip * {
        font-family: inherit
    }

    .apexcharts-tooltip-title {
        padding: 6px;
        font-size: 15px;
        margin-bottom: 4px
    }

    .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
        background: #eceff1;
        border-bottom: 1px solid #ddd
    }

    .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
        background: rgba(0, 0, 0, .7);
        border-bottom: 1px solid #333
    }

    .apexcharts-tooltip-text-goals-value, .apexcharts-tooltip-text-y-value, .apexcharts-tooltip-text-z-value {
        display: inline-block;
        margin-left: 5px;
        font-weight: 600
    }

    .apexcharts-tooltip-text-goals-label:empty, .apexcharts-tooltip-text-goals-value:empty, .apexcharts-tooltip-text-y-label:empty, .apexcharts-tooltip-text-y-value:empty, .apexcharts-tooltip-text-z-value:empty, .apexcharts-tooltip-title:empty {
        display: none
    }

    .apexcharts-tooltip-text-goals-label, .apexcharts-tooltip-text-goals-value {
        padding: 6px 0 5px
    }

    .apexcharts-tooltip-goals-group, .apexcharts-tooltip-text-goals-label, .apexcharts-tooltip-text-goals-value {
        display: flex
    }

    .apexcharts-tooltip-text-goals-label:not(:empty), .apexcharts-tooltip-text-goals-value:not(:empty) {
        margin-top: -6px
    }

    .apexcharts-tooltip-marker {
        width: 12px;
        height: 12px;
        position: relative;
        top: 0;
        margin-right: 10px;
        border-radius: 50%
    }

    .apexcharts-tooltip-series-group {
        padding: 0 10px;
        display: none;
        text-align: left;
        justify-content: left;
        align-items: center
    }

    .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
        opacity: 1
    }

    .apexcharts-tooltip-series-group.apexcharts-active, .apexcharts-tooltip-series-group:last-child {
        padding-bottom: 4px
    }

    .apexcharts-tooltip-series-group-hidden {
        opacity: 0;
        height: 0;
        line-height: 0;
        padding: 0 !important
    }

    .apexcharts-tooltip-y-group {
        padding: 6px 0 5px
    }

    .apexcharts-custom-tooltip, .apexcharts-tooltip-box {
        padding: 4px 8px
    }

    .apexcharts-tooltip-boxPlot {
        display: flex;
        flex-direction: column-reverse
    }

    .apexcharts-tooltip-box > div {
        margin: 4px 0
    }

    .apexcharts-tooltip-box span.value {
        font-weight: 700
    }

    .apexcharts-tooltip-rangebar {
        padding: 5px 8px
    }

    .apexcharts-tooltip-rangebar .category {
        font-weight: 600;
        color: #777
    }

    .apexcharts-tooltip-rangebar .series-name {
        font-weight: 700;
        display: block;
        margin-bottom: 5px
    }

    .apexcharts-xaxistooltip, .apexcharts-yaxistooltip {
        opacity: 0;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #eceff1;
        border: 1px solid #90a4ae
    }

    .apexcharts-xaxistooltip {
        padding: 9px 10px;
        transition: .15s ease all
    }

    .apexcharts-xaxistooltip.apexcharts-theme-dark {
        background: rgba(0, 0, 0, .7);
        border: 1px solid rgba(0, 0, 0, .5);
        color: #fff
    }

    .apexcharts-xaxistooltip:after, .apexcharts-xaxistooltip:before {
        left: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none
    }

    .apexcharts-xaxistooltip:after {
        border-color: transparent;
        border-width: 6px;
        margin-left: -6px
    }

    .apexcharts-xaxistooltip:before {
        border-color: transparent;
        border-width: 7px;
        margin-left: -7px
    }

    .apexcharts-xaxistooltip-bottom:after, .apexcharts-xaxistooltip-bottom:before {
        bottom: 100%
    }

    .apexcharts-xaxistooltip-top:after, .apexcharts-xaxistooltip-top:before {
        top: 100%
    }

    .apexcharts-xaxistooltip-bottom:after {
        border-bottom-color: #eceff1
    }

    .apexcharts-xaxistooltip-bottom:before {
        border-bottom-color: #90a4ae
    }

    .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after, .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
        border-bottom-color: rgba(0, 0, 0, .5)
    }

    .apexcharts-xaxistooltip-top:after {
        border-top-color: #eceff1
    }

    .apexcharts-xaxistooltip-top:before {
        border-top-color: #90a4ae
    }

    .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after, .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
        border-top-color: rgba(0, 0, 0, .5)
    }

    .apexcharts-xaxistooltip.apexcharts-active {
        opacity: 1;
        transition: .15s ease all
    }

    .apexcharts-yaxistooltip {
        padding: 4px 10px
    }

    .apexcharts-yaxistooltip.apexcharts-theme-dark {
        background: rgba(0, 0, 0, .7);
        border: 1px solid rgba(0, 0, 0, .5);
        color: #fff
    }

    .apexcharts-yaxistooltip:after, .apexcharts-yaxistooltip:before {
        top: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none
    }

    .apexcharts-yaxistooltip:after {
        border-color: transparent;
        border-width: 6px;
        margin-top: -6px
    }

    .apexcharts-yaxistooltip:before {
        border-color: transparent;
        border-width: 7px;
        margin-top: -7px
    }

    .apexcharts-yaxistooltip-left:after, .apexcharts-yaxistooltip-left:before {
        left: 100%
    }

    .apexcharts-yaxistooltip-right:after, .apexcharts-yaxistooltip-right:before {
        right: 100%
    }

    .apexcharts-yaxistooltip-left:after {
        border-left-color: #eceff1
    }

    .apexcharts-yaxistooltip-left:before {
        border-left-color: #90a4ae
    }

    .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after, .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
        border-left-color: rgba(0, 0, 0, .5)
    }

    .apexcharts-yaxistooltip-right:after {
        border-right-color: #eceff1
    }

    .apexcharts-yaxistooltip-right:before {
        border-right-color: #90a4ae
    }

    .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after, .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
        border-right-color: rgba(0, 0, 0, .5)
    }

    .apexcharts-yaxistooltip.apexcharts-active {
        opacity: 1
    }

    .apexcharts-yaxistooltip-hidden {
        display: none
    }

    .apexcharts-xcrosshairs, .apexcharts-ycrosshairs {
        pointer-events: none;
        opacity: 0;
        transition: .15s ease all
    }

    .apexcharts-xcrosshairs.apexcharts-active, .apexcharts-ycrosshairs.apexcharts-active {
        opacity: 1;
        transition: .15s ease all
    }

    .apexcharts-ycrosshairs-hidden {
        opacity: 0
    }

    .apexcharts-selection-rect {
        cursor: move
    }

    .svg_select_boundingRect, .svg_select_points_rot {
        pointer-events: none;
        opacity: 0;
        visibility: hidden
    }

    .apexcharts-selection-rect + g .svg_select_boundingRect, .apexcharts-selection-rect + g .svg_select_points_rot {
        opacity: 0;
        visibility: hidden
    }

    .apexcharts-selection-rect + g .svg_select_points_l, .apexcharts-selection-rect + g .svg_select_points_r {
        cursor: ew-resize;
        opacity: 1;
        visibility: visible
    }

    .svg_select_points {
        fill: #efefef;
        stroke: #333;
        rx: 2
    }

    .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
        cursor: crosshair
    }

    .apexcharts-svg.apexcharts-zoomable.hovering-pan {
        cursor: move
    }

    .apexcharts-menu-icon, .apexcharts-pan-icon, .apexcharts-reset-icon, .apexcharts-selection-icon, .apexcharts-toolbar-custom-icon, .apexcharts-zoom-icon, .apexcharts-zoomin-icon, .apexcharts-zoomout-icon {
        cursor: pointer;
        width: 20px;
        height: 20px;
        line-height: 24px;
        color: #6e8192;
        text-align: center
    }

    .apexcharts-menu-icon svg, .apexcharts-reset-icon svg, .apexcharts-zoom-icon svg, .apexcharts-zoomin-icon svg, .apexcharts-zoomout-icon svg {
        fill: #6e8192
    }

    .apexcharts-selection-icon svg {
        fill: #444;
        transform: scale(.76)
    }

    .apexcharts-theme-dark .apexcharts-menu-icon svg, .apexcharts-theme-dark .apexcharts-pan-icon svg, .apexcharts-theme-dark .apexcharts-reset-icon svg, .apexcharts-theme-dark .apexcharts-selection-icon svg, .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg, .apexcharts-theme-dark .apexcharts-zoom-icon svg, .apexcharts-theme-dark .apexcharts-zoomin-icon svg, .apexcharts-theme-dark .apexcharts-zoomout-icon svg {
        fill: #f3f4f5
    }

    .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg, .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg, .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg {
        fill: #008ffb
    }

    .apexcharts-theme-light .apexcharts-menu-icon:hover svg, .apexcharts-theme-light .apexcharts-reset-icon:hover svg, .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg, .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg, .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg, .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg {
        fill: #333
    }

    .apexcharts-menu-icon, .apexcharts-selection-icon {
        position: relative
    }

    .apexcharts-reset-icon {
        margin-left: 5px
    }

    .apexcharts-menu-icon, .apexcharts-reset-icon, .apexcharts-zoom-icon {
        transform: scale(.85)
    }

    .apexcharts-zoomin-icon, .apexcharts-zoomout-icon {
        transform: scale(.7)
    }

    .apexcharts-zoomout-icon {
        margin-right: 3px
    }

    .apexcharts-pan-icon {
        transform: scale(.62);
        position: relative;
        left: 1px;
        top: 0
    }

    .apexcharts-pan-icon svg {
        fill: #fff;
        stroke: #6e8192;
        stroke-width: 2
    }

    .apexcharts-pan-icon.apexcharts-selected svg {
        stroke: #008ffb
    }

    .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
        stroke: #333
    }

    .apexcharts-toolbar {
        position: absolute;
        z-index: 11;
        max-width: 176px;
        text-align: right;
        border-radius: 3px;
        padding: 0 6px 2px;
        display: flex;
        justify-content: space-between;
        align-items: center
    }

    .apexcharts-menu {
        background: #fff;
        position: absolute;
        top: 100%;
        border: 1px solid #ddd;
        border-radius: 3px;
        padding: 3px;
        right: 10px;
        opacity: 0;
        min-width: 110px;
        transition: .15s ease all;
        pointer-events: none
    }

    .apexcharts-menu.apexcharts-menu-open {
        opacity: 1;
        pointer-events: all;
        transition: .15s ease all
    }

    .apexcharts-menu-item {
        padding: 6px 7px;
        font-size: 12px;
        cursor: pointer
    }

    .apexcharts-theme-light .apexcharts-menu-item:hover {
        background: #eee
    }

    .apexcharts-theme-dark .apexcharts-menu {
        background: rgba(0, 0, 0, .7);
        color: #fff
    }

    @media screen and (min-width: 768px) {
        .apexcharts-canvas:hover .apexcharts-toolbar {
            opacity: 1
        }
    }

    .apexcharts-canvas .apexcharts-element-hidden, .apexcharts-datalabel.apexcharts-element-hidden, .apexcharts-hide .apexcharts-series-points {
        opacity: 0
    }

    .apexcharts-datalabel, .apexcharts-datalabel-label, .apexcharts-datalabel-value, .apexcharts-datalabels, .apexcharts-pie-label {
        cursor: default;
        pointer-events: none
    }

    .apexcharts-pie-label-delay {
        opacity: 0;
        animation-name: opaque;
        animation-duration: .3s;
        animation-fill-mode: forwards;
        animation-timing-function: ease
    }

    .apexcharts-annotation-rect, .apexcharts-area-series .apexcharts-area, .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events, .apexcharts-gridline, .apexcharts-line, .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events, .apexcharts-point-annotation-label, .apexcharts-radar-series path, .apexcharts-radar-series polygon, .apexcharts-toolbar svg, .apexcharts-tooltip .apexcharts-marker, .apexcharts-xaxis-annotation-label, .apexcharts-yaxis-annotation-label, .apexcharts-zoom-rect {
        pointer-events: none
    }

    .apexcharts-marker {
        transition: .15s ease all
    }

    .resize-triggers {
        animation: 1ms resizeanim;
        visibility: hidden;
        opacity: 0;
        height: 100%;
        width: 100%;
        overflow: hidden
    }

    .contract-trigger:before, .resize-triggers, .resize-triggers > div {
        content: " ";
        display: block;
        position: absolute;
        top: 0;
        left: 0
    }

    .resize-triggers > div {
        height: 100%;
        width: 100%;
        background: #eee;
        overflow: auto
    }

    .contract-trigger:before {
        overflow: hidden;
        width: 200%;
        height: 200%
    }</style>
