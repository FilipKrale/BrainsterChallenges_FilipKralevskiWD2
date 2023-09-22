type Props = {
  title?: string;
  filters?: string[];
  filterParam?: string;
  filterBikes: Function;
  setFilteredBikes: Function;
  activeFilter: string;
  setActiveFilter: Function;
};
export default function Category({
  title = "Show All",
  filters = [""],
  filterParam = "",
  filterBikes,
  setFilteredBikes,
  activeFilter,
  setActiveFilter
}: Props) {
  return (
    <div className="border-slate-400 border-b-2 py-2">
      <h2 className="font-bold text-4xl tracking-wide">{title}</h2>
      {filters.map((filter) => {
        const filteredBikes = filterBikes(filter, filterParam);
        const classes = "filter" + (activeFilter === filter ? " active" : "");
        return (
          <div
            key={filter}
            className={classes}
            onClick={() => {
              setFilteredBikes(filteredBikes);
              setActiveFilter(filter);
            }}
          >
            <span>{filter === "" ? "Show All" : filter}</span>
            <span className="badge">{filteredBikes.length}</span>
          </div>
        );
      })}
    </div>
  );
}
