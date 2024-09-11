/**
 * WordPress dependeincies
 */
import { __ } from "@wordpress/i18n";

/**
 * Internal dependencies
 */
import "./style.scss";
import Edit from "./edit";
import Save from "./save";
import deprecated from "./deprecated";
import metadata from "../block.json";
import attributes from "./attributes";
import { ebConditionalRegisterBlockType } from "@essential-blocks/controls";

import { ReactComponent as Icon } from "./icon.svg";

ebConditionalRegisterBlockType(metadata, {
    icon: Icon,
    attributes,
    edit: Edit,
    save: Save,
    deprecated,
});
