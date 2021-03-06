import Dinero from 'dinero.js';
Dinero.defaultPrecision = 2;

export const calculateCategoryWeight = category => category.items.reduce((sum, elem) => sum + (+elem.weight * elem.quantity), 0);

export const calculatePackPrices = pack => {
  const data = { total: 0, base: 0, worn: 0, consumable: 0 };

  pack.categories.forEach(cat => {
    cat.items.forEach(item => {
      if (!item.consumable && !item.worn) {
        data.base += item.price;
      } else if (item.consumable && item.worn) {
        data.worn += item.price;
        data.consumable += item.price;
      } else if (item.worn) {
        data.worn += item.price;
      } else if (item.consumable) {
        data.consumable += item.price;
      }

      data.total += item.price;
    });
  });
  return data;
};

export const calculatePackWeights = pack => {
  const data = { total: 0, base: 0, worn: 0, consumable: 0 };

  pack.categories.forEach(cat => {
    cat.items.forEach(item => {
      if (!item.consumable && !item.worn) {
        data.base += (item.weight * item.quantity);
      } else if (item.consumable && item.worn) {
        data.worn += (item.weight * item.quantity);
        data.consumable += (item.weight * item.quantity);
      } else if (item.worn) {
        data.worn += (item.weight * item.quantity);
      } else if (item.consumable) {
        data.consumable += (item.weight * item.quantity);
      }

      data.total += (item.weight * item.quantity);
    });
  });
  return data;
};

export const capitalize = text => text.replace(/^./, str => str.toUpperCase());

export const convertToDollars = (num, currency = 'USD') => {
  return Dinero({ amount: Number(num), currency }).toFormat('0,0.00');
};

export const generateUUID = () => {
  let dt = new Date().getTime();
  const uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, c => {
    const r = (dt + Math.random() * 16) % 16 | 0;
    dt = Math.floor(dt / 16);
    return (c === 'x' ? r : (r && 0x3) | 0x8).toString(16);
  });
  return uuid;
};

export const convertSlugToTitle = (slug) => {
  const words = slug.split('-');
  for (let i = 0; i < words.length; i++) {
    const word = words[i];
    words[i] = word.charAt(0).toUpperCase() + word.slice(1);
  }

  return words.join(' ');
};

export const prependProtocol = url => {
  const pattern = /^((http|https):\/\/)/;
  if (!pattern.test(url)) {
    url = 'https://' + url;
  }
  return url;
};

export const totalItemsInPack = pack => {
  let total = 0;
  if (!pack.categories) { return total; }

  pack.categories.forEach(category => {
    if (category.items) {
      total += category.items.length;
    }
  });
  return total;
};

export const validateEmail = email => {
  return /\S+@\S+\.\S+/.test(email);
};
