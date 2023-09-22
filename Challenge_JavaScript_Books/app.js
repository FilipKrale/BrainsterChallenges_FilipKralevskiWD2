class Book {
  constructor(title, author, maxPages, onPage) {
    this.title = title;
    this.author = author;
    this.maxPages = maxPages;
    this.onPage = onPage;
  }
}

const books = [
  new Book("The Hobbit", "J.R.R. Tolkien", 200, 60),
  new Book("Harry Potter", "J.K. Rowling", 250, 150),
  new Book("50 Shades of Grey", "E.L. James", 150, 150),
  new Book("Don Quixote", "Miguel De Servantes", 350, 300),
  new Book("Hamlet", "William Shakespeare", 550, 550),
];

const init = (books) => {
  const infoList = document.createElement("ul");
  const hasReadList = document.createElement("ul");
  const bookTable = document.createElement("table");
  const thead = document.createElement("thead");
  const tbody = document.createElement("tbody");
  const tfoot = document.createElement("tfoot");

  bookTable.append(thead, tbody, tfoot);

  const headings = ["Title", "Author", "Max Pages", "On Page", "Progress"];
  thead.append(createTableRow(headings, "th"));

  const addToEachDataSet = (book) => {
    infoList.append(createInfoListItem(book));
    hasReadList.append(createHasReadListItem(book));
    tbody.append(
      createTableRow(
        [...Object.values(book), (book.onPage / book.maxPages) * 100],
        "td"
      )
    );
  };

  books.forEach((book) => {
    addToEachDataSet(book);
  });

  const form = document.createElement("form");
  const titleInput = document.createElement("input");
  titleInput.placeholder = "Enter Title";
  const authorInput = document.createElement("input");
  authorInput.placeholder = "Enter Author";
  const maxPagesInput = document.createElement("input");
  maxPagesInput.placeholder = "Enter Max Pages";
  const onPageInput = document.createElement("input");
  onPageInput.placeholder = "Enter page you are currently on";
  const submitButton = document.createElement("button");
  submitButton.innerText = "Add To List";

  form.append(
    titleInput,
    authorInput,
    maxPagesInput,
    onPageInput,
    submitButton
  );
  form.addEventListener("submit", (e) => {
    e.preventDefault();
    addToEachDataSet(
      new Book(
        titleInput.value,
        authorInput.value,
        maxPagesInput.value,
        onPageInput.value
      )
    );
    books.push(
      new Book(
        titleInput.value,
        authorInput.value,
        maxPagesInput.value,
        onPageInput.value
      )
    );
    console.log(books);
  });

  document.body.append(infoList, hasReadList, bookTable, form);
};

const createInfoListItem = (item) => {
  const infoListItem = document.createElement("li");
  infoListItem.innerText = `${item.title} by ${item.author}`;
  return infoListItem;
};

const createHasReadListItem = (item) => {
  const hasReadListItem = document.createElement("li");
  if (item.maxPages === item.onPage) {
    hasReadListItem.innerText = `You have already read ${item.title} by ${item.author}`;
    hasReadListItem.style.color = "green";
  } else {
    hasReadListItem.innerText = `You still need to read ${item.title} by ${item.author}`;
    hasReadListItem.style.color = "red";
  }
  return hasReadListItem;
};

const createTableRow = (rowData, elType) => {
  const tableRow = document.createElement("tr");

  rowData.forEach((column, i) => {
    const tableElement = document.createElement(elType);
    if (i === rowData.length - 1 && elType === "td") {
      const progressBar = document.createElement("div");
      progressBar.style.background = "green";
      progressBar.style.color = "white";
      progressBar.style.width = `${column}%`;
      progressBar.style.height = "100%";
      tableElement.append(progressBar);
      progressBar.innerText = Math.round(column) + "%";
      console.log(i);
    } else {
      tableElement.innerText = column;
    }

    tableRow.append(tableElement);
  });

  return tableRow;
};

init(books);
