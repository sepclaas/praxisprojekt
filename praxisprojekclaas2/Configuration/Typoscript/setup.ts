
plugin.tx_praxisprojekclaas2_calendar {
  view {
    templateRootPaths.0 = EXT:praxisprojekclaas2/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_praxisprojekclaas2_calendar.view.templateRootPath}
    partialRootPaths.0 = EXT:praxisprojekclaas2/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_praxisprojekclaas2_calendar.view.partialRootPath}
    layoutRootPaths.0 = EXT:praxisprojekclaas2/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_praxisprojekclaas2_calendar.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_praxisprojekclaas2_calendar.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_praxisprojekclaas2._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-praxisprojekclaas2 table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-praxisprojekclaas2 table th {
        font-weight:bold;
    }

    .tx-praxisprojekclaas2 table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
