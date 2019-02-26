const defaultState = {
  menuActive: false,
  view: ""
}

export default function reducer(state = defaultState, action) {
  switch(action.type) {
    case "BURGER_CLICK":
      return {
        ...state,
        menuActive: !state.menuActive
      }
    default:
      return defaultState
  }
}
