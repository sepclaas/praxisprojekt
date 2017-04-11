
plugin.tx_praxisprojekclaas2_calendar {
  view {
    # cat=plugin.tx_praxisprojekclaas2_calendar/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:praxisprojekclaas2/Resources/Private/Templates/
    # cat=plugin.tx_praxisprojekclaas2_calendar/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:praxisprojekclaas2/Resources/Private/Partials/
    # cat=plugin.tx_praxisprojekclaas2_calendar/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:praxisprojekclaas2/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_praxisprojekclaas2_calendar//a; type=string; label=Default storage PID
    storagePid =
  }
}
